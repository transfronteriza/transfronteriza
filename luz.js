/* Luz líquida de Transfronteriza. Un lienzo WebGL por pieza: ruido deformado (domain warp) que mezcla
   dos o tres luces sobre papel o tinta, con grano de arena encima. Cada "modo" es una forma con sentido.
   Uso: <canvas class="luz" data-modo="converge" data-colores="#F2B233,#E2592A,#2F4FA8" data-fondo="#EFE6DA" data-velocidad="1"></canvas>
   Si no hay WebGL o la persona pide menos movimiento, pinta un fotograma fijo. */
(() => {
  const MODOS = { lamina: 0, converge: 1, sierra: 2, orillas: 3, sube: 4, ondas: 5, corrientes: 6, capa: 7, mar: 8 };
  const VS = 'attribute vec2 p;void main(){gl_Position=vec4(p,0.,1.);}';
  const FS = `precision highp float;
uniform vec2 R;uniform float T;uniform int M;uniform vec3 C0,C1,C2,BG;uniform float G,D;
vec2 h2(vec2 p){p=vec2(dot(p,vec2(127.1,311.7)),dot(p,vec2(269.5,183.3)));return -1.+2.*fract(sin(p)*43758.5453);}
float n2(vec2 p){vec2 i=floor(p),f=fract(p),u=f*f*(3.-2.*f);return mix(mix(dot(h2(i),f),dot(h2(i+vec2(1,0)),f-vec2(1,0)),u.x),mix(dot(h2(i+vec2(0,1)),f-vec2(0,1)),dot(h2(i+vec2(1,1)),f-vec2(1,1)),u.x),u.y);}
float fbm(vec2 p){float v=0.,a=.5;for(int i=0;i<4;i++){v+=a*n2(p);p=p*2.03+vec2(1.7,9.2);a*=.5;}return v;}
float grano(vec2 p){return fract(sin(dot(p,vec2(12.9898,78.233)))*43758.5453);}
float sm(float a,float b,float x){return smoothstep(a,b,x);}
void main(){
  vec2 uv=gl_FragCoord.xy/R; float ar=R.x/R.y; vec2 q=vec2(uv.x*ar,uv.y); float t=T*.045;
  /* el agua: dos capas de ruido que se deforman una a otra, muy despacio */
  vec2 w1=vec2(fbm(q*1.3+t),fbm(q*1.3+vec2(5.2,1.3)-t*.8));
  vec2 w2=vec2(fbm(q*1.1+4.*w1*.35+vec2(1.7,9.2)+t*.6),fbm(q*1.1+4.*w1*.35+vec2(8.3,2.8)-t*.5));
  float w=fbm(q*1.0+3.*w2*.4);           /* -0.5..0.5 aprox */
  vec2 d=w2*.35;                            /* desplazamiento líquido */
  vec3 col=BG; float m=0.;
  if(M==0){ /* lámina: núcleo cálido abajo a la derecha, bruma arriba a la izquierda */
    float k=1.-sm(0.,.85,length(q+d-vec2(ar*.78,.3))); float f=1.-sm(0.,.9,length(q+d-vec2(ar*.15,.85)));
    col=mix(BG,C2,f*.9); col=mix(col,C1,sm(.05,.75,k)); col=mix(col,C0,sm(.45,.95,k));
  } else if(M==1){ /* converge: luces desde las esquinas se juntan en un punto claro */
    vec2 c=vec2(ar*.5,.5); vec2 p=q+d-c; float r=length(p); float a=atan(p.y,p.x);
    float s0=sm(-1.,1.,cos(a-.8)), s1=sm(-1.,1.,cos(a-2.4)), s2=sm(-1.,1.,cos(a+1.6));
    vec3 ring=normalize(vec3(s0,s1,s2)+.001); vec3 lado=(ring.x*C0+ring.y*C1+ring.z*C2);
    col=mix(BG,lado,sm(.95,.25,r)); col=mix(col,vec3(1.,.985,.95),1.-sm(0.,.22+.06*sin(T*.4),r));
  } else if(M==2){ /* sierra: horizonte que ondula, sol de oro arriba a la derecha, la finca abajo */
    float hz=.46+.08*w; float cielo=sm(hz-.03,hz+.05,uv.y+d.y);
    vec3 arriba=mix(C1,BG,sm(.5,1.,uv.y)); float sol=1.-sm(0.,.55,length(q+d-vec2(ar*.74,.78)));
    arriba=mix(arriba,C0,sol*sol); vec3 abajo=mix(C2,C0,sm(.0,.5,uv.y+.3*w));
    col=mix(abajo,arriba,cielo);
  } else if(M==3){ /* orillas: dos orillas que se tocan en una franja que respira */
    float x=uv.x+d.x*.5; float seam=.5+.06*sin(uv.y*3.+T*.5)+.08*w;
    float izq=sm(seam+.12,seam-.12,x); col=mix(C1,C0,izq);
    float franja=1.-sm(0.,.14,abs(x-seam)); col=mix(col,C2,franja*.85); col=mix(col,BG,.12*(1.-abs(uv.y-.5)*2.));
  } else if(M==4){ /* sube: corrientes que suben de abajo a la izquierda hacia una luz arriba a la derecha */
    float f=(uv.x+uv.y)*.5+d.x*.6+.25*w; col=mix(C1,C0,sm(.15,.7,f));
    float luz=1.-sm(0.,.6,length(q+d-vec2(ar*.85,.9))); col=mix(col,C2,luz*luz); col=mix(BG,col,sm(-.1,.35,f+.2));
  } else if(M==5){ /* ondas: un centro de oro y anillos que se abren */
    float r=length(q+d*.6-vec2(ar*.5,.5)); float an=.5+.5*sin(r*13.-T*.9);
    col=mix(BG,C1,an*sm(.8,.12,r)*.5); col=mix(col,C2,sm(.65,.15,r)*.3); col=mix(col,C0,1.-sm(0.,.2,r));
  } else if(M==6){ /* corrientes: tres cintas que se cruzan sin borrarse */
    float y=uv.y+d.y*.9; col=BG;
    float a=exp(-pow((y-(.28+.08*sin(uv.x*4.+T*.5)))*7.,2.)); col=mix(col,C0,a);
    float b=exp(-pow((y-(.52+.08*sin(uv.x*3.2-T*.6+1.)))*7.,2.)); col=mix(col,C1,b);
    float c=exp(-pow((y-(.74+.08*sin(uv.x*3.6+T*.45+2.)))*7.,2.)); col=mix(col,C2,c);
  } else if(M==7){ /* capa: una luz de oro debajo de una capa de bruma que la tapa a medias */
    float luz=1.-sm(0.,.6,length(q+d-vec2(ar*.5,.4))); col=mix(BG,C1,luz*.9); col=mix(col,C0,luz*luz);
    float borde=.55+.1*w+.04*sin(T*.5); float tapa=sm(borde-.1,borde+.1,uv.y+d.y*.4); col=mix(col,C2,tapa*.92);
  } else { /* mar: añil que respira */
    float k=.5+.5*w+.2*sin(T*.3); col=mix(C1,C0,k); col=mix(col,C2,sm(.3,.9,length(q+d-vec2(ar*.4,.55))));
  }
  /* grano de arena, que se desliza */
  float g=grano(gl_FragCoord.xy+floor(T*5.)*vec2(13.,7.)); col*=1.-G*(g-.5)*.55; col+=G*.04*(g-.5);
  gl_FragColor=vec4(col,1.);
}`;
  const hex = h => { h = h.trim().replace('#', ''); return [0, 2, 4].map(i => parseInt(h.slice(i, i + 2), 16) / 255); };
  const reduce = matchMedia('(prefers-reduced-motion: reduce)').matches;
  /* un solo contexto WebGL para todas las piezas (el navegador limita a unos dieciséis): se dibuja en un lienzo
     compartido y se copia a cada pieza, que es un lienzo 2D normal */
  let GL = null;
  const motor = () => {
    if (GL) return GL;
    const cv = document.createElement('canvas'), gl = cv.getContext('webgl', { antialias: false, alpha: false, preserveDrawingBuffer: true }); if (!gl) return null;
    const sh = (t, src) => { const o = gl.createShader(t); gl.shaderSource(o, src); gl.compileShader(o); if (!gl.getShaderParameter(o, gl.COMPILE_STATUS)) console.error(gl.getShaderInfoLog(o)); return o; };
    const pr = gl.createProgram(); gl.attachShader(pr, sh(gl.VERTEX_SHADER, VS)); gl.attachShader(pr, sh(gl.FRAGMENT_SHADER, FS)); gl.linkProgram(pr); gl.useProgram(pr);
    const b = gl.createBuffer(); gl.bindBuffer(gl.ARRAY_BUFFER, b); gl.bufferData(gl.ARRAY_BUFFER, new Float32Array([-1, -1, 1, -1, -1, 1, 1, 1]), gl.STATIC_DRAW);
    const p = gl.getAttribLocation(pr, 'p'); gl.enableVertexAttribArray(p); gl.vertexAttribPointer(p, 2, gl.FLOAT, false, 0, 0);
    const U = n => gl.getUniformLocation(pr, n);
    GL = { cv, gl, u: { R: U('R'), T: U('T'), M: U('M'), C0: U('C0'), C1: U('C1'), C2: U('C2'), BG: U('BG'), G: U('G'), D: U('D') } };
    return GL;
  };
  const vivos = new Set(); let raf = 0;
  const io = new IntersectionObserver(es => { es.forEach(e => { e.isIntersecting ? vivos.add(e.target) : vivos.delete(e.target); }); if (vivos.size && !raf) raf = requestAnimationFrame(loop); });
  const prepara = cv => {
    const M = motor(); if (!M) { cv.style.background = cv.dataset.fondo || '#E9DFD6'; return; }
    const cols = (cv.dataset.colores || '#F2B233,#E2592A,#CDCFE6').split(',').map(hex); while (cols.length < 3) cols.push(cols[cols.length - 1]);
    const P = { cols, bg: hex(cv.dataset.fondo || '#E9DFD6'), modo: MODOS[cv.dataset.modo] ?? 0, grano: +(cv.dataset.grano ?? .32), vel: +(cv.dataset.velocidad ?? 1), t0: Math.random() * 400 };
    const g2 = cv.getContext('2d');
    const dibuja = t => {
      const { gl, u } = M, dpr = Math.min(1.5, devicePixelRatio || 1), w = Math.max(1, Math.round(cv.clientWidth * dpr * .85)), h = Math.max(1, Math.round(cv.clientHeight * dpr * .85));
      if (cv.width !== w || cv.height !== h) { cv.width = w; cv.height = h; }
      if (M.cv.width !== w || M.cv.height !== h) { M.cv.width = w; M.cv.height = h; }
      gl.viewport(0, 0, w, h);
      gl.uniform3fv(u.C0, P.cols[0]); gl.uniform3fv(u.C1, P.cols[1]); gl.uniform3fv(u.C2, P.cols[2]); gl.uniform3fv(u.BG, P.bg);
      gl.uniform1i(u.M, P.modo); gl.uniform1f(u.G, P.grano); gl.uniform1f(u.D, 1); gl.uniform2f(u.R, w, h); gl.uniform1f(u.T, P.t0 + t * P.vel);
      gl.drawArrays(gl.TRIANGLE_STRIP, 0, 4);
      g2.drawImage(M.cv, 0, 0);
    };
    cv._luz = dibuja; dibuja(0); if (!reduce) io.observe(cv);
  };
  const loop = ts => { raf = 0; for (const cv of vivos) cv._luz(ts / 1000); if (vivos.size) raf = requestAnimationFrame(loop); };
  const arranca = () => document.querySelectorAll('canvas.luz:not([data-lista])').forEach(cv => { cv.dataset.lista = 1; prepara(cv); });
  document.readyState === 'loading' ? addEventListener('DOMContentLoaded', arranca) : arranca();
  window.Luz = { arranca };
})();
