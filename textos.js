/* Textos y fotos que pinta el JavaScript de la página (tarjetas, pasos, ventanas, botones…) también se pueden
   cambiar desde «Editar esta página». Cada uno se reconoce por una huella de su contenido original: al aparecer
   en la página se marca (data-tf / data-tf-img) y, si hay un cambio guardado, se sustituye al momento.
   Lo carga todo el mundo: es lo que aplica los cambios. El editor (editor.js) solo lo carga quien puede editar. */
(() => {
  const TX = window.TF_TX = Object.assign({ textos: {}, imgs: {}, orig: {}, imgsOrig: {} }, window.TF_TX || {});
  const INL = new Set(['B', 'STRONG', 'I', 'EM', 'BR', 'MARK', 'SPAN', 'A', 'SUP', 'SUB', 'SMALL', 'U', 'S', 'Q', 'CITE', 'TIME', 'WBR']);
  const TAGS = 'h1,h2,h3,h4,h5,h6,p,li,blockquote,small,a,button,figcaption,dt,dd,span,label,summary,legend,th,td,div,q,cite,b,strong,i,em';
  const LETRA = /[A-Za-zÀ-ÖØ-öø-ÿ¿¡]/;
  const FUERA = 'script,style,template,[data-tf],[data-tf-c],[data-tf-f],.tfe-abre,.tfe-barra,.tfe-capa,.tfe-aviso,#wpadminbar,.media-modal,.media-modal-backdrop,.a11y-speak-region,.a11y-speak-intro-text,canvas,svg';
  /* huella corta y estable del contenido (cyrb53) */
  const huella = s => { let h1 = 0xdeadbeef, h2 = 0x41c6ce57; for (let i = 0; i < s.length; i++) { const c = s.charCodeAt(i); h1 = Math.imul(h1 ^ c, 2654435761); h2 = Math.imul(h2 ^ c, 1597334677); } h1 = Math.imul(h1 ^ (h1 >>> 16), 2246822507) ^ Math.imul(h2 ^ (h2 >>> 13), 3266489909); h2 = Math.imul(h2 ^ (h2 >>> 16), 2246822507) ^ Math.imul(h1 ^ (h1 >>> 13), 3266489909); return (4294967296 * (2097151 & h2) + (h1 >>> 0)).toString(36); };
  const norm = s => s.replace(/\s+/g, ' ').trim();
  const soloEnLinea = el => { for (const n of el.children) { if (!INL.has(n.tagName) || !soloEnLinea(n)) return false; } return true; };
  const textoEditable = el => {
    if (el.closest(FUERA) || el.parentElement?.closest('[data-tf],[data-tf-c]') || el.closest('[contenteditable]')) return false;
    if (!LETRA.test(el.textContent) || !soloEnLinea(el) || el.querySelector('[data-tf],[data-tf-c],[data-tf-f],[data-tf-img],[data-tf-vid]')) return false;
    if (el.tagName === 'A' && el.querySelector('img,svg')) return false;
    /* un contenedor que solo envuelve a otro bloque de texto (p dentro de div) se deja para el de dentro */
    if (el.children.length === 1 && !el.children[0].matches('b,strong,i,em,mark,sup,sub,u,s,q,cite,time,br,wbr') && !norm([...el.childNodes].filter(n => n.nodeType === 3).map(n => n.nodeValue).join('')).length) return false;
    return true;
  };
  const marcaTexto = el => {
    if (!textoEditable(el)) return;
    const o = norm(el.innerHTML), k = 'tj' + huella(el.tagName.toLowerCase() + '|' + o);
    el.setAttribute('data-tf', k); TX.orig[k] = o;
    if (k in TX.textos) el.innerHTML = TX.textos[k];
  };
  const marcaImg = im => {
    if (im.hasAttribute('data-tf-img') || im.closest(FUERA) || !/\/themes\//.test(im.src || '')) return;
    let ruta; try { ruta = new URL(im.src, location.href).pathname; } catch (e) { return; }
    const k = 'ij' + huella(ruta);
    im.setAttribute('data-tf-img', k); TX.imgsOrig[k] = im.src;
    if (k in TX.imgs) { im.removeAttribute('srcset'); im.removeAttribute('sizes'); im.src = TX.imgs[k]; }
  };
  const marca = raiz => {
    if (raiz.nodeType !== 1) return;
    if (raiz.matches(TAGS)) marcaTexto(raiz);
    raiz.querySelectorAll(TAGS).forEach(marcaTexto);
    if (raiz.tagName === 'IMG') marcaImg(raiz);
    raiz.querySelectorAll('img').forEach(marcaImg);
  };
  TX.marca = marca;
  const arranca = () => {
    marca(document.body);
    new MutationObserver(ms => { for (const m of ms) m.addedNodes.forEach(marca); }).observe(document.body, { childList: true, subtree: true });
  };
  document.readyState === 'loading' ? document.addEventListener('DOMContentLoaded', arranca) : arranca();
})();
