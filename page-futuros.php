<?php if (!defined('ABSPATH')) exit; ?><!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
<meta name="color-scheme" content="dark">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Funnel+Display:wght@400;500&family=Host+Grotesk:wght@400;500&display=swap">
<style>
:root{--mbg:#1F1B2D;--mtx:#F5EEDF;--mln:rgba(245,238,223,.14);--mac:#F2B233;
  --papel:#F5EEDF;--tinta:#1F1B2D;--capa:#29243A;--capa-2:#322C45;--oro:#F2B233;
  --t1:#F5EEDF;--t2:rgba(245,238,223,.68);--t3:rgba(245,238,223,.44);--linea:rgba(245,238,223,.12);
  --disp:"Funnel Display","Host Grotesk",system-ui,sans-serif;--text:"Host Grotesk",system-ui,-apple-system,"Segoe UI",sans-serif;
  --gut:clamp(16px,4vw,56px);--max:1280px;--hh:76px;--ease:cubic-bezier(.2,.7,.2,1);
}
*{box-sizing:border-box}
[id]{scroll-margin-top:calc(var(--hh) + 20px)}

[hidden]{display:none!important}
html{scroll-behavior:smooth}
body{margin:0;background:var(--tinta);color:var(--t1);font:400 17px/1.55 var(--text);-webkit-font-smoothing:antialiased;overflow-x:clip}
img{display:block;max-width:100%}
a{color:inherit;text-decoration:none}
button{font:inherit;color:inherit;background:none;border:0;padding:0;cursor:pointer}
h1,h2,h3,h4,p,figure,ol,ul,blockquote{margin:0}
ol,ul{padding:0;list-style:none}
h1,h2,h3,h4{font-family:var(--disp);font-weight:500;letter-spacing:-.025em;text-wrap:balance}
:focus-visible{outline:2px solid var(--oro);outline-offset:3px;border-radius:4px}
.in{max-width:var(--max);margin-inline:auto;padding-inline:var(--gut)}
.btn{display:inline-flex;align-items:center;justify-content:center;gap:10px;border-radius:999px;padding:15px 26px;font:500 15.5px/1 var(--text);white-space:nowrap;transition:transform .3s var(--ease),background-color .3s,color .3s,box-shadow .3s}
.btn:hover{transform:translateY(-1px)}
.btn.g{background:var(--oro);color:var(--tinta)}
.btn.l{box-shadow:inset 0 0 0 1px rgba(245,238,223,.35);color:var(--t1)}
.btn.l:hover{box-shadow:inset 0 0 0 1px var(--t1)}
.sec{padding-block:clamp(88px,10vw,150px)}
.sec-h{display:flex;justify-content:space-between;align-items:flex-end;gap:24px;flex-wrap:wrap;margin-bottom:clamp(36px,4vw,56px)}
.sec-h h2{font-size:clamp(44px,5.4vw,84px);line-height:.94;letter-spacing:-.04em}
.sec-h p{margin-top:16px;color:var(--t2);font-size:clamp(17px,1.35vw,20px);max-width:40ch}

/* ---------- cabecera ---------- */
.top{position:fixed;inset:0 0 auto 0;z-index:30;height:var(--hh);background:rgba(31,27,45,.86);backdrop-filter:blur(12px);-webkit-backdrop-filter:blur(12px);border-bottom:1px solid transparent;transition:border-color .3s}
.top.baja{border-bottom-color:var(--linea)}
.top .row{height:100%;display:flex;align-items:center;gap:28px;padding-inline:var(--gut)}
.top .logo img{height:24px;width:auto}
.top nav{display:flex;align-items:center;gap:28px;margin-left:auto;font-size:15.5px}
.top nav a:not(.btn){color:var(--t2);transition:color .2s}
.top nav a:not(.btn):hover,.top nav a[aria-current]{color:var(--t1)}
.top .btn{padding:12px 20px;font-size:14.5px}
.top{--lfc:#F5EEDF}

/* ---------- 1 · apertura: el girasol entero con los futuros dentro ---------- */
.open{position:relative;min-height:100vh;min-height:100svh;display:flex;align-items:flex-end;overflow:hidden;padding-top:var(--hh)}
.open .t{position:relative;z-index:2;padding-bottom:clamp(48px,7vw,110px);width:100%;pointer-events:none}
.open h1{font-size:clamp(72px,9.5vw,150px);line-height:.84;letter-spacing:-.055em}
.open p{margin-top:clamp(20px,2.4vw,32px);font-size:clamp(20px,1.9vw,28px);line-height:1.3;color:var(--t2);max-width:22ch}
/* la lámina de Futuros: papel con grano y una luz cálida que respira, dentro del fondo de tinta */
.open .lamina{position:absolute;left:var(--gut);right:var(--gut);top:calc(var(--hh) + 14px);bottom:14px;z-index:1;border-radius:8px;overflow:hidden;background:#1F1B2D;isolation:isolate}
.open .lamina::before{content:none;display:none;position:absolute;inset:-12%;background:radial-gradient(70% 70% at 88% 78%,#F2B233 0%,#E2592A 36%,rgba(226,89,42,0) 68%),radial-gradient(60% 60% at 12% 18%,#CDCFE6 0%,rgba(205,207,230,0) 62%),linear-gradient(135deg,#D9D5E2 0%,#E6B79C 50%,#F2B233 100%);animation:respira 18s ease-in-out infinite alternate}
.open .lamina::after{content:none;display:none;position:absolute;inset:-300px 0 0 -300px;animation:arena 16s linear infinite;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='g'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='3' stitchTiles='stitch'/%3E%3CfeColorMatrix values='0 0 0 0 .12 0 0 0 0 .1 0 0 0 0 .2 0 0 0 .55 0'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23g)'/%3E%3C/svg%3E");background-size:300px;mix-blend-mode:multiply;opacity:.7}
.open .lamina canvas{position:absolute;inset:0;width:100%;height:100%;z-index:1}
.open .lamina canvas.luz{z-index:0}
@keyframes respira{from{transform:translate(0,0) scale(1)}to{transform:translate(-3%,2%) scale(1.08)}}
@keyframes arena{from{transform:translate(0,0)}to{transform:translate(300px,300px)}}
.open .t{position:absolute;left:calc(var(--gut) + clamp(24px,4vw,64px));right:calc(var(--gut) + clamp(24px,4vw,64px));bottom:clamp(44px,6vw,90px);padding-bottom:0;width:auto;color:var(--papel)}
.open p{color:rgba(245,238,223,.8)}

/* ---------- luz líquida (manual v3): el motor luz.js dibuja en cada canvas.luz ---------- */
canvas.luz{display:block}
.silL{position:relative;overflow:hidden;background:#1F1B2D}
.silL canvas.luz{position:absolute;left:50%;bottom:-4%;width:92%;height:auto;aspect-ratio:1;translate:-50% 0;-webkit-mask:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Cpath d='M50 4c13 0 21 9 21 22 0 9-4 16-10 20 20 5 33 22 35 54H4c2-32 15-49 35-54-6-4-10-11-10-20C29 13 37 4 50 4z'/%3E%3C/svg%3E") center bottom/100% 100% no-repeat;mask:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Cpath d='M50 4c13 0 21 9 21 22 0 9-4 16-10 20 20 5 33 22 35 54H4c2-32 15-49 35-54-6-4-10-11-10-20C29 13 37 4 50 4z'/%3E%3C/svg%3E") center bottom/100% 100% no-repeat}
.silL.alta canvas.luz{width:100%;bottom:-6%}
.silL .anon{position:absolute;left:50%;top:30%;translate:-50% 0;z-index:3;width:30%;color:rgba(245,238,223,.9)}
/* forma (manual v3): marcos de 24 px, tarjetas de 18 y 14 */
.ir,.panel,.paper,.mec .foto,.firma,.firmado,.docs a,.hace,.inf .cover,.story .cuadro{border-radius:18px}
.hace li,.ht,.mb .ft,.trans li,.porque li,.claves li,.tarjeta,.abre{border-radius:14px}
.open .fr,.open .lamina,.tres{border-radius:24px}
.ir .ft{position:relative}

/* ---------- la luz con grano (manual v3): lo que se dibuja cuando no hay foto ---------- */
.luz{position:relative;overflow:hidden;border-radius:6px;isolation:isolate;background:#DDD6DF}
.luz::before{content:"";position:absolute;inset:-14%;background:var(--L);animation:respiraL 20s ease-in-out infinite alternate}
.luz::after{content:"";position:absolute;inset:0;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='g'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='3' stitchTiles='stitch'/%3E%3CfeColorMatrix values='0 0 0 0 .12 0 0 0 0 .1 0 0 0 0 .2 0 0 0 .55 0'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23g)'/%3E%3C/svg%3E");background-size:300px;mix-blend-mode:multiply;opacity:.7;pointer-events:none}
.luz.oscura::after{mix-blend-mode:screen;opacity:.35}
.luz > *{position:relative;z-index:1}
@keyframes respiraL{from{transform:translate(0,0) scale(1)}to{transform:translate(-3%,2%) scale(1.08)}}
.luz.amanecer{--L:radial-gradient(70% 70% at 88% 78%,#F2B233 0%,#E2592A 36%,rgba(226,89,42,0) 68%),radial-gradient(60% 60% at 12% 18%,#CDCFE6 0%,rgba(205,207,230,0) 62%),linear-gradient(135deg,#D9D5E2 0%,#E6B79C 50%,#F2B233 100%)}
.luz.fuego{background:#1F1B2D;--L:radial-gradient(65% 65% at 78% 72%,#F2B233 0%,#E2592A 34%,rgba(226,89,42,0) 66%),radial-gradient(50% 50% at 18% 22%,#6A4C93 0%,rgba(106,76,147,0) 62%),linear-gradient(160deg,#1F1B2D 0%,#3A2A3F 55%,#7A3A2E 100%)}
.luz.orilla{--L:radial-gradient(70% 70% at 14% 80%,#2F4FA8 0%,#5B6FBF 30%,rgba(91,111,191,0) 66%),radial-gradient(60% 60% at 86% 20%,#F2B233 0%,rgba(242,178,51,0) 60%),linear-gradient(120deg,#CDCFE6 0%,#E9D7C8 55%,#F2B233 100%)}
.luz.noche{background:#1F1B2D;--L:radial-gradient(70% 70% at 20% 80%,#2F4FA8 0%,rgba(47,79,168,0) 66%),radial-gradient(45% 45% at 85% 15%,#CDCFE6 0%,rgba(205,207,230,0) 60%),linear-gradient(160deg,#1F1B2D 0%,#262A4A 60%,#3A4B8F 100%)}
.luz.orillas{background:#EFE6DA;--L:radial-gradient(55% 90% at -4% 50%,#2F4FA8 0%,#5B6FBF 35%,rgba(91,111,191,0) 72%),radial-gradient(55% 90% at 104% 50%,#E2592A 0%,#F2B233 40%,rgba(242,178,51,0) 72%),#EFE6DA}
.luz.cruce{background:#F2D8C6;--L:repeating-linear-gradient(104deg,rgba(47,79,168,0) 0px,rgba(47,79,168,.62) 70px,rgba(47,79,168,0) 150px),linear-gradient(135deg,#F2D8C6 0%,#E6B79C 45%,#F2B233 100%)}
.luz.paso{--L:linear-gradient(90deg,#2F4FA8 0%,#7B6FB5 38%,#E7A87E 66%,#F2B233 100%)}
.luz.calma{--L:radial-gradient(70% 80% at 10% 20%,#E6B79C 0%,rgba(230,183,156,0) 66%),radial-gradient(60% 60% at 30% 100%,#F2B233 0%,rgba(242,178,51,0) 60%),linear-gradient(135deg,#D9D5E2 0%,#E3CFC8 55%,#CDCFE6 100%)}
.silL{position:relative;overflow:hidden;background:#1F1B2D;isolation:isolate}
.silL i{position:absolute;left:50%;bottom:-4%;width:78%;aspect-ratio:1/1;translate:-50% 0;background:var(--L);-webkit-mask:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Cpath d='M50 4c13 0 21 9 21 22 0 9-4 16-10 20 20 5 33 22 35 54H4c2-32 15-49 35-54-6-4-10-11-10-20C29 13 37 4 50 4z'/%3E%3C/svg%3E") center bottom/100% 100% no-repeat;mask:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'%3E%3Cpath d='M50 4c13 0 21 9 21 22 0 9-4 16-10 20 20 5 33 22 35 54H4c2-32 15-49 35-54-6-4-10-11-10-20C29 13 37 4 50 4z'/%3E%3C/svg%3E") center bottom/100% 100% no-repeat;animation:respiraL 24s ease-in-out infinite alternate}
.silL.alta i{width:96%;bottom:-6%}
.silL::after{content:"";position:absolute;inset:0;background-image:url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='300' height='300'%3E%3Cfilter id='g'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='.9' numOctaves='3' stitchTiles='stitch'/%3E%3CfeColorMatrix values='0 0 0 0 .12 0 0 0 0 .1 0 0 0 0 .2 0 0 0 .55 0'/%3E%3C/filter%3E%3Crect width='300' height='300' filter='url(%23g)'/%3E%3C/svg%3E");background-size:300px;mix-blend-mode:screen;opacity:.45;pointer-events:none}
.silL.fuego{--L:radial-gradient(65% 65% at 78% 72%,#F2B233 0%,#E2592A 34%,rgba(226,89,42,0) 66%),radial-gradient(50% 50% at 18% 22%,#6A4C93 0%,rgba(106,76,147,0) 62%),linear-gradient(160deg,#3A2A3F 0%,#7A3A2E 100%)}
.silL.orilla{--L:radial-gradient(70% 70% at 14% 80%,#2F4FA8 0%,#5B6FBF 30%,rgba(91,111,191,0) 66%),radial-gradient(60% 60% at 86% 20%,#F2B233 0%,rgba(242,178,51,0) 60%),linear-gradient(120deg,#CDCFE6 0%,#E9D7C8 55%,#F2B233 100%)}
.silL.noche{--L:radial-gradient(60% 60% at 50% 30%,#CDCFE6 0%,#7B6FB5 45%,#2F4FA8 100%)}
.silL.amanecer{--L:radial-gradient(70% 70% at 88% 78%,#F2B233 0%,#E2592A 36%,rgba(226,89,42,0) 68%),linear-gradient(135deg,#D9D5E2 0%,#E6B79C 50%,#F2B233 100%)}
.silL.tarde{--L:radial-gradient(60% 60% at 70% 30%,#F2B233 0%,rgba(242,178,51,0) 60%),linear-gradient(160deg,#6A4C93 0%,#A86A7C 55%,#E6B79C 100%)}
.silL.mar{--L:radial-gradient(60% 60% at 30% 30%,#CDCFE6 0%,rgba(205,207,230,0) 60%),linear-gradient(160deg,#2F4FA8 0%,#5B6FBF 55%,#CDCFE6 100%)}
.silL.brasa{--L:radial-gradient(60% 60% at 50% 20%,#F2B233 0%,rgba(242,178,51,0) 60%),linear-gradient(170deg,#8E2238 0%,#E2592A 60%,#F2B233 100%)}
.silL.trigo{--L:radial-gradient(60% 60% at 40% 30%,#FFFBF2 0%,rgba(255,251,242,0) 55%),linear-gradient(160deg,#F2B233 0%,#E6B79C 55%,#CDCFE6 100%)}
.luz.tarde{--L:radial-gradient(60% 60% at 80% 20%,#F2B233 0%,rgba(242,178,51,0) 60%),linear-gradient(160deg,#6A4C93 0%,#A86A7C 55%,#E6B79C 100%)}
.luz.brasa{background:#8E2238;--L:radial-gradient(60% 60% at 70% 30%,#F2B233 0%,rgba(242,178,51,0) 60%),linear-gradient(170deg,#8E2238 0%,#E2592A 60%,#F2B233 100%)}
@media (prefers-reduced-motion:reduce){.luz::before,.silL i{animation:none}}
@media (prefers-reduced-motion:reduce){.open .lamina::before,.open .lamina::after{animation:none}}
/* ---------- 2 · informe anual ---------- */
.inf{display:grid;grid-template-columns:minmax(0,.9fr) minmax(0,1.1fr);gap:clamp(40px,7vw,120px);align-items:center}
.libro{justify-self:center;perspective:1400px}
.cover{position:relative;width:clamp(260px,30vw,420px);aspect-ratio:3/4;border-radius:3px 6px 6px 3px;overflow:hidden;background:#141221;box-shadow:0 1px 0 rgba(245,238,223,.06) inset,-24px 40px 70px rgba(0,0,0,.5);transform:rotateY(-16deg) rotate(1.5deg);transition:transform .9s var(--ease);outline:1px solid transparent;backface-visibility:hidden;-webkit-backface-visibility:hidden;will-change:transform}
.libro:hover .cover,.libro:focus-visible .cover{transform:rotateY(-4deg) rotate(0deg)}
.cover::before{content:"";position:absolute;inset:0 auto 0 0;width:14px;z-index:3;background:linear-gradient(90deg,rgba(0,0,0,.45),rgba(255,255,255,.06) 60%,rgba(0,0,0,0))}
.cover > img{position:absolute;inset:0;width:100%;height:100%;object-fit:cover}
.cover::after{content:"";position:absolute;inset:0;background:linear-gradient(180deg,rgba(15,12,24,.55),rgba(15,12,24,0) 45%)}
.cover .ct{position:absolute;inset:0;z-index:2;padding:clamp(22px,2.4vw,34px);display:flex;flex-direction:column;text-align:left}
.cover .ct h3{font-size:clamp(32px,3.4vw,50px);line-height:1;max-width:9ch}
.cover .ct img{margin-top:auto;height:18px;width:auto;align-self:flex-start}
.inf .txt h2{font-size:clamp(40px,4.6vw,72px);line-height:.96;letter-spacing:-.04em}
.inf .txt > p{margin-top:20px;font-size:clamp(18px,1.4vw,21px);color:var(--t2);max-width:38ch}
.claves{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:clamp(16px,2.4vw,32px);margin-top:clamp(32px,3.6vw,48px)}
.claves b{display:block;font:500 clamp(40px,4vw,62px)/.9 var(--disp);letter-spacing:-.045em;color:var(--oro)}
.claves p{margin-top:12px;font-size:15px;line-height:1.42;color:var(--t2)}
.inf .acts{display:flex;gap:12px;flex-wrap:wrap;margin-top:clamp(32px,3.6vw,44px)}
/* en construcción: informe, papers y Consejo sin contenido real todavía (TF.enConstruccion) */
.inf.obra .cover{background:var(--capa);transform:rotateY(-12deg) rotate(1deg)}
.inf.obra .libro:hover .cover,.inf.obra .libro:focus-visible .cover{transform:rotateY(-3deg) rotate(0deg)}
.inf.obra .cover::after{display:none}
.cover > .luz{position:absolute;inset:0;width:100%;height:100%;border-radius:0}
.cover .girC{position:absolute;inset:0;width:100%;height:100%}
.paper .banda .luz{width:100%;height:100%;border-radius:0}
.mb .ft .silL,.marco .ft .silL{position:absolute;inset:0;width:100%;height:100%}
.art .ab .luz{width:100%;height:100%;border-radius:0}
.paper .banda .luz{width:100%;height:100%;border-radius:0}
.inf.obra .txt > p + p{margin-top:14px;font-size:17px}
.paper .por .pep{flex:none;width:38px;height:38px}
.consejo .obra .ft img,dialog.perfil.obra .ft img{filter:none}

/* ---------- 3 · papers ---------- */
.filtros{display:flex;gap:8px;flex-wrap:wrap}
.filtros button{border-radius:999px;padding:10px 16px;font-size:14.5px;color:var(--t2);box-shadow:inset 0 0 0 1px var(--linea);transition:background-color .2s,color .2s,box-shadow .2s}
.filtros button:hover{color:var(--t1)}
.filtros button[aria-pressed=true]{background:var(--papel);color:var(--tinta);box-shadow:none}
.papers{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:clamp(14px,1.8vw,24px)}
.paper{display:flex;flex-direction:column;width:100%;height:100%;text-align:left;padding:clamp(22px,2.2vw,30px);border-radius:6px;background:var(--capa);transition:background-color .3s,transform .4s var(--ease)}
.paper:hover{background:var(--capa-2);transform:translateY(-3px)}
.paper h3{font-size:clamp(23px,2vw,29px);line-height:1.08;letter-spacing:-.02em;min-height:2.16em}
@media (max-width:620px){.paper h3{min-height:0}}
.paper .banda{margin:22px 0;aspect-ratio:4/1;border-radius:4px;overflow:hidden}
.paper .banda img{width:100%;height:100%;object-fit:cover;transition:transform 1.2s var(--ease)}
.paper:hover .banda img{transform:scale(1.05)}
.paper .por{margin-top:auto;display:flex;align-items:center;gap:12px;font-size:15px}
.paper .por img{width:38px;height:38px;border-radius:50%;object-fit:cover;filter:grayscale(1)}
.paper .por small{display:block;color:var(--t2);font-size:14px}

/* ---------- 4 · consejo ---------- */
.consejo{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:clamp(18px,2.4vw,36px) clamp(14px,2vw,28px)}
.mb{position:relative;text-align:left;display:block;width:100%}
.mb .ft{position:relative;aspect-ratio:4/5;border-radius:6px;overflow:hidden;background:var(--capa)}
.mb .ft img{width:100%;height:100%;object-fit:cover;filter:grayscale(1);transition:transform 1.1s var(--ease)}
.mb:hover .ft img{transform:scale(1.04)}
.mb .pep{flex:none;width:22px;height:22px;transition:transform .8s var(--ease)}
.mb:hover .pep{transform:rotate(60deg)}
.mb h3{display:flex;align-items:center;gap:8px;margin-top:16px;font-size:clamp(19px,1.5vw,22px);line-height:1.15;letter-spacing:-.015em}
.mb p{margin-top:4px;padding-left:30px;font-size:14.5px;line-height:1.4;color:var(--t2)}

dialog.perfil,dialog.legal{border:0;padding:0;width:min(980px,92vw);max-height:90vh;background:var(--tinta);color:var(--t1);border-radius:10px;box-shadow:0 30px 90px rgba(0,0,0,.6)}
dialog::backdrop{background:rgba(10,8,18,.72);backdrop-filter:blur(4px);-webkit-backdrop-filter:blur(4px)}
.marco{position:relative;margin:clamp(10px,1.4vw,16px);border:1px solid rgba(245,238,223,.18);border-radius:6px;display:grid;grid-template-columns:minmax(0,.85fr) minmax(0,1.15fr);min-height:min(560px,76vh)}
.marco .ft{position:relative;overflow:hidden;border-radius:5px 0 0 5px}
.marco .ft [hidden]{display:none}
.marco .ft img{width:100%;height:100%;object-fit:cover;filter:grayscale(1)}
.marco .tx{position:relative;padding:clamp(28px,4vw,56px);display:flex;flex-direction:column}
.marco .tx canvas{width:36px;height:36px}
.marco h3{margin-top:22px;font-size:clamp(34px,3.4vw,50px);line-height:1;letter-spacing:-.035em}
.marco .rol{margin-top:10px;font-size:16px;color:var(--oro)}
.marco .bio{margin-top:22px;font-size:17px;line-height:1.6;color:var(--t2);max-width:44ch}
.marco .pie{margin-top:auto;padding-top:28px;display:flex;justify-content:space-between;align-items:center;font-size:14px;color:var(--t3)}
.flechas{display:flex;gap:8px}
.icon{width:44px;height:44px;border-radius:50%;box-shadow:inset 0 0 0 1px rgba(245,238,223,.25);display:grid;place-items:center;font-size:18px;transition:box-shadow .2s,background-color .2s}
.icon:hover{box-shadow:inset 0 0 0 1px currentColor}
.cerrar{position:absolute;top:clamp(20px,2.4vw,30px);right:clamp(20px,2.4vw,30px);font-size:22px}

/* legal */
.legal .marco{display:block;min-height:0;padding:clamp(28px,4vw,56px)}
.legal .tabs{display:flex;gap:8px;flex-wrap:wrap;margin-right:56px}
.legal .tabs button{border-radius:999px;padding:10px 16px;font-size:14.5px;color:var(--t2);box-shadow:inset 0 0 0 1px var(--linea)}
.legal .tabs button[aria-selected=true]{background:var(--papel);color:var(--tinta);box-shadow:none}
.legal .pan{margin-top:28px;max-width:62ch;color:var(--t2);font-size:16px;line-height:1.65}
.legal .pan h3{color:var(--t1);font-size:30px;margin-bottom:14px}
.legal .pan p + p{margin-top:12px}

/* ---------- lector de papers ---------- */
.lector{position:fixed;inset:0;z-index:60;overflow-y:auto;overscroll-behavior:contain;background:#16131f;color:var(--t1);--fs:19px;animation:entra .45s var(--ease)}
.lector[data-modo=papel]{background:var(--papel);color:var(--tinta)}
@keyframes entra{from{opacity:0;transform:translateY(18px)}to{opacity:1;transform:none}}
.lector .barra{position:sticky;top:0;z-index:2;display:flex;align-items:center;gap:10px;padding:14px var(--gut);background:inherit;border-bottom:1px solid var(--linea)}
.lector[data-modo=papel] .barra{border-color:rgba(31,27,45,.1)}
.lector .barra .logo{height:22px;width:auto;margin-right:auto}
.lector[data-modo=papel] .barra .logo.o,.lector:not([data-modo=papel]) .barra .logo.c{display:none}
.lector .icon{width:42px;height:42px;font-size:15px}
.lector[data-modo=papel] .icon{box-shadow:inset 0 0 0 1px rgba(31,27,45,.22)}
.lector .icon svg{width:18px;height:18px}
.lector .prog{position:absolute;left:0;bottom:-1px;height:2px;width:0;background:var(--oro)}
.art{max-width:720px;margin:0 auto;padding:clamp(28px,5vw,64px) var(--gut) 120px}
.art .ab{aspect-ratio:3/1;border-radius:6px;overflow:hidden}
.art .ab img{width:100%;height:100%;object-fit:cover}
.art .ab.informe{aspect-ratio:16/9}
.art h1{margin-top:clamp(28px,3.4vw,44px);font-size:clamp(38px,5.2vw,64px);line-height:1;letter-spacing:-.04em}
.firma{display:flex;align-items:center;gap:14px;margin-top:26px;font-size:15.5px}
.firma img{width:52px;height:52px;border-radius:50%;object-fit:cover;filter:grayscale(1)}
.firma img.marcaF{filter:none;object-fit:contain;border-radius:0;background:none}
.firma small{display:block;font-size:14px;opacity:.66}
.art .lead{margin-top:clamp(32px,4vw,48px);font:400 calc(var(--fs) * 1.3)/1.45 var(--disp);letter-spacing:-.01em}
.art .cuerpo{margin-top:26px;font-size:var(--fs);line-height:1.72}
.art .cuerpo p{opacity:.86}
.art .cuerpo p + p{margin-top:1.1em}
.art .cuerpo h2{margin:1.9em 0 .6em;font-size:calc(var(--fs) * 1.45);line-height:1.1;letter-spacing:-.025em}
.art .cuerpo blockquote{margin:1.6em 0;font:500 calc(var(--fs) * 1.45)/1.25 var(--disp);letter-spacing:-.02em;color:var(--oro)}
.lector[data-modo=papel] .cuerpo blockquote{color:#B8741A}
.art .dato{display:grid;grid-template-columns:auto 1fr;gap:18px;align-items:center;margin:1.6em 0;padding:22px 24px;border-radius:6px;background:rgba(245,238,223,.06)}
.lector[data-modo=papel] .dato{background:rgba(31,27,45,.05)}
.art .dato b{font:500 calc(var(--fs) * 2.4)/.9 var(--disp);letter-spacing:-.045em;color:var(--oro);white-space:nowrap}
.lector[data-modo=papel] .dato b{color:#B8741A}
.art .dato p{font-size:calc(var(--fs) * .88);line-height:1.5;opacity:.86}
.autora{display:grid;grid-template-columns:120px 1fr;gap:24px;align-items:center;margin-top:56px;padding:26px;border-radius:6px;background:rgba(245,238,223,.06)}
.lector[data-modo=papel] .autora{background:rgba(31,27,45,.05)}
.autora img{width:120px;height:120px;border-radius:50%;object-fit:cover;filter:grayscale(1)}
.autora h3{font-size:24px}
.autora .r{margin-top:2px;font-size:15px;opacity:.66}
.autora p.b{margin-top:10px;font-size:15.5px;line-height:1.55;opacity:.86}
.art .acts{display:flex;gap:12px;flex-wrap:wrap;margin-top:32px}
.sig{display:flex;justify-content:space-between;align-items:center;gap:20px;width:100%;text-align:left;margin-top:40px;padding:22px 26px;border-radius:6px;box-shadow:inset 0 0 0 1px var(--linea);transition:box-shadow .3s}
.lector[data-modo=papel] .sig{box-shadow:inset 0 0 0 1px rgba(31,27,45,.14)}
.sig:hover{box-shadow:inset 0 0 0 1px currentColor}
.sig small{display:block;font-size:14px;opacity:.6}
.sig b{display:block;margin-top:4px;font:500 22px/1.15 var(--disp);letter-spacing:-.02em}
.sig i{font-style:normal;font-size:22px}
/* la puerta: una sola invitación por página, discreta, que aparece cuando ya has leído la mitad y se cierra para siempre */
.puerta{position:fixed;left:50%;bottom:calc(16px + env(safe-area-inset-bottom,0px));z-index:45;translate:-50% 0;display:flex;align-items:center;gap:14px;max-width:calc(100vw - 24px);padding:10px 10px 10px 20px;border-radius:999px;background:var(--tinta);color:var(--papel);box-shadow:0 18px 44px rgba(31,27,45,.3);transition:opacity .45s var(--ease),transform .45s var(--ease)}
.puerta:not(.on){opacity:0;transform:translateY(18px);pointer-events:none}
.puerta p{margin:0;font-size:15px;white-space:nowrap}
.puerta .btn{padding:11px 18px;font-size:14.5px;background:var(--oro);color:var(--tinta)}
.puerta .cx{width:34px;height:34px;border-radius:50%;color:rgba(245,238,223,.7);font-size:18px}
.puerta .cx:hover{color:var(--papel)}
@media (max-width:620px){.puerta{left:12px;right:12px;translate:0;max-width:none;padding-left:16px}.puerta p{white-space:normal;font-size:14px}}
.aviso{position:fixed;left:50%;bottom:28px;z-index:80;translate:-50% 0;padding:12px 20px;border-radius:999px;background:var(--papel);color:var(--tinta);font-size:15px;box-shadow:0 10px 30px rgba(0,0,0,.3);transition:opacity .3s,transform .3s}
.aviso:not(.on){opacity:0;transform:translateY(10px);pointer-events:none}

/* ---------- transparencia ---------- */
.docs{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:clamp(10px,1.4vw,18px)}
.docs a{display:flex;flex-direction:column;gap:14px;height:100%;padding:22px;border-radius:6px;background:var(--capa);transition:background-color .3s,transform .4s var(--ease)}
.docs a:hover{background:var(--capa-2);transform:translateY(-3px)}
.docs svg{width:30px;height:30px;color:var(--oro)}
.docs b{font:500 19px/1.2 var(--disp);letter-spacing:-.01em}
.docs span{margin-top:auto;font-size:13.5px;color:var(--t3)}
.reg{margin-top:22px;font-size:14px;color:var(--t3)}
@media (max-width:1000px){.docs{grid-template-columns:repeat(2,minmax(0,1fr))}}
/* ---------- 5 · hablemos ---------- */
.hab{display:grid;grid-template-columns:minmax(0,1fr) minmax(0,1fr);gap:clamp(32px,6vw,96px);align-items:start;padding:clamp(32px,5vw,72px);border-radius:6px;background:var(--capa)}
.hab h2{font-size:clamp(46px,5.4vw,84px);line-height:.94;letter-spacing:-.04em}
.hab .sub{margin-top:18px;color:var(--t2);font-size:clamp(17px,1.35vw,20px);max-width:32ch}
.caja{display:flex;gap:8px;padding:6px;border-radius:999px;background:var(--tinta);box-shadow:inset 0 0 0 1px var(--linea)}
.caja input{flex:1;min-width:0;border:0;background:none;color:var(--t1);font:inherit;padding:12px 18px;outline:0}
.caja input::placeholder{color:var(--t3)}
.caja:focus-within{box-shadow:inset 0 0 0 2px var(--t1)}
.hform{display:grid;grid-template-columns:minmax(0,1fr);gap:14px}
label.f{display:grid;gap:6px;font-size:14px;color:var(--t2)}
input[type=text]{width:100%;border:0;border-radius:10px;background:var(--tinta);padding:15px 16px;font:inherit;color:var(--t1);box-shadow:inset 0 0 0 1px var(--linea)}
input[type=text]:focus{outline:0;box-shadow:inset 0 0 0 2px var(--t1)}
.two{display:grid;grid-template-columns:1fr 1fr;gap:12px}
.q{font:500 17px/1.3 var(--disp);margin-top:6px}
.chips{display:flex;flex-wrap:wrap;gap:8px}
.chips label{position:relative}
.chips input{position:absolute;opacity:0;inset:0;cursor:pointer}
.chips span{display:inline-block;border-radius:999px;padding:11px 16px;box-shadow:inset 0 0 0 1px var(--linea);font-size:15px;color:var(--t2);transition:background-color .2s,color .2s}
.chips input:checked + span{background:var(--papel);color:var(--tinta);box-shadow:none}
.chips input:focus-visible + span{outline:2px solid var(--oro);outline-offset:2px}
.ok{display:flex;gap:10px;align-items:flex-start;font-size:14px;color:var(--t2)}
.ok input{margin-top:3px;accent-color:var(--oro);width:17px;height:17px}
.ok button{text-decoration:underline;text-underline-offset:3px}
.ok b{color:var(--t1);font-weight:500}
.err{font-size:14px;color:var(--oro);min-height:1em}
.gracias h3{font-size:clamp(30px,3vw,44px);line-height:1.02}
.gracias p{margin-top:12px;color:var(--t2)}

/* ---------- pie (igual que en la Home) ---------- */
.foot{margin-top:clamp(88px,10vw,150px);background:var(--tinta);color:rgba(245,238,223,.7);padding-block:56px 30px;font-size:15px;border-top:1px solid var(--linea)}
.foot .row{display:flex;justify-content:space-between;align-items:center;gap:24px;flex-wrap:wrap}
.foot .flogo{height:30px;width:auto}
.foot nav{display:flex;gap:28px;flex-wrap:wrap;align-items:center}
.foot nav a:hover,.foot .leg button:hover{color:var(--papel)}
.foot .leg{margin-top:36px;font-size:13px;color:rgba(245,238,223,.42);display:flex;justify-content:space-between;gap:16px;flex-wrap:wrap}
.foot .in{display:grid;grid-template-columns:minmax(0,1fr) minmax(280px,400px);grid-template-areas:"row carta" "leg leg";gap:44px clamp(32px,6vw,96px);align-items:start}
.foot .row{grid-area:row;flex-direction:column;align-items:flex-start;gap:26px}
.foot .leg{grid-area:leg;margin-top:0}
.foot .carta{grid-area:carta;max-width:none;margin:0}
.foot .carta [hidden]{display:none}
.foot .carta h3{font-size:22px;line-height:1.1;letter-spacing:-.02em;color:#F5EEDF}
.foot .carta p{margin-top:6px;font-size:14.5px;color:rgba(245,238,223,.62);max-width:40ch}
.foot .carta .campos{margin-top:14px;display:grid;grid-template-columns:minmax(0,1fr) auto;gap:8px}
.foot .carta input[type=email]{min-width:0;width:100%;box-sizing:border-box;padding:12px 16px;border-radius:999px;border:0;background:rgba(245,238,223,.08);color:#F5EEDF;font:inherit;font-size:15px;box-shadow:inset 0 0 0 1px rgba(245,238,223,.22)}
.foot .carta input[type=email]::placeholder{color:rgba(245,238,223,.45)}
.foot .carta input[type=email]:focus{outline:0;box-shadow:inset 0 0 0 2px #F2B233}
.foot .carta .btn{padding:12px 18px;font-size:14.5px;background:#F5EEDF;color:#1F1B2D}
.foot .carta .ok{margin-top:10px;font-size:12.5px;line-height:1.4;color:rgba(245,238,223,.55)}
.foot .carta .ok input{margin-top:1px;width:15px;height:15px;flex:none;accent-color:#F2B233}
.foot .carta .ok button{color:rgba(245,238,223,.85);text-decoration:underline;text-underline-offset:3px}
.foot .carta .err{margin-top:6px;font-size:13px;color:#F2B233}
.foot .carta .hecho{margin-top:12px;font-size:15px;color:#F5EEDF}
@media (max-width:820px){.foot .in{grid-template-columns:minmax(0,1fr);grid-template-areas:"row" "carta" "leg"}.foot .row{flex-direction:row;align-items:center}}
@media (max-width:620px){.foot .carta .campos{grid-template-columns:minmax(0,1fr)}.foot .carta .btn{width:100%;padding:14px}}

@media (max-width:1000px){
  .inf{grid-template-columns:minmax(0,1fr)}
  .papers{grid-template-columns:repeat(2,minmax(0,1fr))}
  .consejo{grid-template-columns:repeat(2,minmax(0,1fr))}
  .hab{grid-template-columns:minmax(0,1fr);padding:28px 20px}
  .marco{grid-template-columns:1fr}
  .marco .ft{aspect-ratio:4/3;border-radius:5px 5px 0 0}
  .marco .ft img{object-position:50% 25%}
  .top nav a:not(.btn){display:none}
}
@media (max-width:620px){ .papers{grid-template-columns:1fr} .claves{grid-template-columns:1fr} .two{grid-template-columns:1fr} .autora{grid-template-columns:1fr} .art .dato{grid-template-columns:1fr} .lector .barra{gap:6px} .lector .icon{width:38px;height:38px} }
@media (prefers-reduced-motion:reduce){ *{transition:none!important;animation:none!important} }
.lf{display:inline-grid;place-items:center;width:42px;height:42px;margin-left:-14px;border-radius:50%;color:var(--lfc,#1F1B2D);transition:background-color .2s,transform .3s}
.lf:hover{background:rgba(127,127,127,.12);transform:translateY(-1px)}
.lf:hover{color:var(--lfh,#1F1B2D)}
.lf .xf{width:30px;height:30px;overflow:visible}
.lf .punto{transform-origin:41px 9px;animation:late 2.4s ease-in-out infinite}
@keyframes late{0%,100%{transform:scale(1);opacity:1}50%{transform:scale(1.35);opacity:.75}}
dialog.entrar{width:min(520px,92vw)}
dialog.entrar .marco{text-align:center}
dialog.entrar .xf{width:72px;height:72px;margin:6px auto 0;display:block;color:#1F1B2D;overflow:visible}
dialog.entrar h3{margin:18px 0 0;font-size:clamp(28px,3vw,38px);line-height:1.02}
dialog.entrar p{margin-top:10px;color:rgba(31,27,45,.66)}
dialog.entrar form{margin-top:22px;display:grid;gap:10px}
dialog.entrar input{width:100%;border:0;border-radius:12px;background:#fff;padding:16px;font:inherit;font-size:17px;color:#1F1B2D;box-shadow:inset 0 0 0 1px rgba(31,27,45,.12);text-align:center}
dialog.entrar input:focus{outline:0;box-shadow:inset 0 0 0 2px #1F1B2D}
dialog.entrar .btn{width:100%;padding:17px}
dialog.entrar .nueva{margin-top:18px;font-size:15px}
dialog.entrar .nueva a{text-decoration:underline;text-underline-offset:3px;color:#1F1B2D}
dialog.entrar .err{color:#E2592A;font-size:14px;min-height:1em}
dialog.entrar .ok{margin:2px 0 0;text-align:left;font-size:13.5px;line-height:1.45;color:rgba(31,27,45,.66)}
dialog.entrar .ok input{margin-top:2px;width:17px;height:17px;flex:none;accent-color:#1F1B2D}
dialog.entrar .ok button{color:#1F1B2D;text-decoration:underline;text-underline-offset:3px}
@media (max-width:1000px){.lf span{display:none}}
dialog.entrar{border:0;padding:0;border-radius:10px;background:#F5EEDF;color:#1F1B2D;overflow:auto;max-height:90vh;box-shadow:0 30px 90px rgba(0,0,0,.35)}
dialog.entrar::backdrop{background:rgba(15,12,24,.6);backdrop-filter:blur(3px);-webkit-backdrop-filter:blur(3px)}
dialog.entrar .marco{position:relative;display:block;min-height:0;margin:14px;padding:clamp(26px,4vw,44px);border:1px solid rgba(31,27,45,.12);border-radius:18px}
dialog.entrar .x{position:absolute;top:16px;right:16px;width:44px;height:44px;border-radius:50%;box-shadow:inset 0 0 0 1px rgba(31,27,45,.12);background:none;color:#1F1B2D;font-size:22px}
dialog.entrar .btn{background:#1F1B2D;color:#F5EEDF}


/* ---------- menú del móvil ---------- */
.mnu{display:none;flex:none;width:44px;height:44px;margin-left:2px;border-radius:50%;flex-direction:column;align-items:center;justify-content:center;gap:5px;color:inherit}
.mnu i{display:block;width:19px;height:1.8px;border-radius:2px;background:currentColor;transition:transform .3s var(--ease)}
.mnu[aria-expanded=true] i:first-child{transform:translateY(3.4px) rotate(45deg)}
.mnu[aria-expanded=true] i:last-child{transform:translateY(-3.4px) rotate(-45deg)}
.mnuP{position:fixed;z-index:29;inset:var(--hh) 0 0 0;display:flex;flex-direction:column;gap:30px;padding:26px var(--gut) calc(30px + env(safe-area-inset-bottom,0px));overflow:auto;background:var(--mbg);color:var(--mtx);animation:mnuIn .3s var(--ease)}
@keyframes mnuIn{from{opacity:0;transform:translateY(-8px)}to{opacity:1;transform:none}}
.mnuP nav{display:flex;flex-direction:column}
.mnuP nav a{padding:14px 0;border-bottom:1px solid var(--mln);font:500 34px/1.05 var(--disp);letter-spacing:-.03em}
.mnuP nav a[aria-current]{color:var(--mac)}
.mnuP .btn{align-self:flex-start}
.mnuP .mail{margin-top:auto;padding:12px 0;font-size:16px;opacity:.72}
body.admin-bar .mnuP{top:calc(var(--hh) + 46px)}
@media (max-width:1000px){.mnu{display:inline-flex}.top .row{gap:14px}}
/* ---------- móvil: vídeos de fondo sin el botón de play del sistema, botones que caben ---------- */
video:not([controls])::-webkit-media-controls,video:not([controls])::-webkit-media-controls-start-playback-button,video:not([controls])::-webkit-media-controls-overlay-play-button{display:none!important;-webkit-appearance:none}
@media (max-width:620px){
  .btn{white-space:normal;text-align:center;line-height:1.2}
  .top .logo img{height:29px}
  .top .row{gap:10px}
  .top .btn{padding:11px 16px;font-size:14.5px;white-space:nowrap}
}
@media (max-width:380px){ .top .logo img{height:25px} .top .btn{padding:10px 13px;font-size:14px} }
/* ---------- tocar con el dedo ---------- */
.ok input{flex:none}
.toggle{position:relative}.toggle::before{content:"";position:absolute;inset:-12px -8px}
@media (max-width:620px){
  .foot nav{gap:2px 22px}.foot nav a{display:inline-block;padding:11px 0}
  .foot .leg{gap:6px 16px}.foot .leg button{padding:11px 0}
  .ok input{width:22px;height:22px;margin-top:1px}
}
body.admin-bar .top{top:32px}@media (max-width:782px){body.admin-bar .top{top:46px}}
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class('tf'); ?>>
<?php wp_body_open(); ?>

<header class="top" id="top"><div class="row">
  <a class="logo" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Transfronteriza, inicio"><img src="<?php tf_img('ia8745bc028', TF_U . '/logo/h-oscuro-34.svg'); ?>" data-tf-img="ia8745bc028" alt="Transfronteriza"></a>
  <nav aria-label="Principal"><a href="<?php echo esc_url(tf_pagina('comunidad')); ?>" data-tf="t38114eb012"><?php tf_t('t38114eb012'); ?></a><a href="<?php echo esc_url(tf_pagina('futuros')); ?>" aria-current="page" data-tf="tf6078594dd"><?php tf_t('tf6078594dd'); ?></a><a class="btn g" href="<?php echo esc_url(home_url('/')); ?>#descubre" data-tf="t3158ca410d"><?php tf_t('t3158ca410d'); ?></a><a class="lf" href="#" data-entrar aria-label="Entra en La Frontera" title="Entra en La Frontera"><svg class="xf" viewBox="0 0 48 48" aria-hidden="true"><path d="M9 8.5h16.5a6 6 0 0 1 6 6v7.5a6 6 0 0 1-6 6H17l-6.5 5.5V28H9a6 6 0 0 1-6-6v-7.5a6 6 0 0 1 6-6z" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linejoin="round"/><path d="M23 19h16a6 6 0 0 1 6 6v7a6 6 0 0 1-6 6h-1.5v5.5L31 38h-8a6 6 0 0 1-6-6v-7a6 6 0 0 1 6-6z" fill="#E2592A"/><circle class="punto" cx="41" cy="9" r="4.2" fill="#F2B233"/></svg></a></nav>
  <button class="mnu" type="button" aria-label="Abrir el menú" aria-expanded="false" aria-controls="mnuP"><i></i><i></i></button>
</div></header>
<div class="mnuP" id="mnuP" hidden><nav aria-label="Menú"><a href="<?php echo esc_url(tf_pagina('comunidad')); ?>" data-tf="t38114eb012"><?php tf_t('t38114eb012'); ?></a><a href="<?php echo esc_url(tf_pagina('futuros')); ?>" aria-current="page" data-tf="tf6078594dd"><?php tf_t('tf6078594dd'); ?></a><a href="#" data-entrar data-tf="t11905120cc"><?php tf_t('t11905120cc'); ?></a></nav><a class="btn g" href="<?php echo esc_url(home_url('/')); ?>#descubre" data-tf="t3158ca410d"><?php tf_t('t3158ca410d'); ?></a><a class="mail" href="mailto:hola@transfronteriza.net" data-tf="ta0aa22019a"><?php tf_t('ta0aa22019a'); ?></a></div>

<main>
  <!-- 1 · Apertura -->
  <section class="open" data-tf-sec="open">
    <div class="lamina" aria-hidden="true"><canvas class="luz" data-modo="lamina" data-colores="#F2B233,#E2592A,#6A4C93" data-fondo="#1F1B2D" data-escala=".5" aria-hidden="true"></canvas><canvas id="girasolF"></canvas></div>
    <div class="t">
      <h1 data-tf="t7dd57907b5"><?php tf_t('t7dd57907b5'); ?></h1>
      <p data-tf="tbc6bf077e8"><?php tf_t('tbc6bf077e8'); ?></p>
    </div>
  </section>

  <!-- 2 · Informe anual -->
  <section class="sec in" id="informe" data-tf-sec="informe" data-tf-panel="edit.php?post_type=tf_informe" data-tf-panel-t="Editar el informe">
    <div class="inf obra" data-ec="informe" hidden>
      <button class="libro" type="button" data-abre="informe" aria-label="Leer el avance del informe"><div class="cover"><canvas class="luz" data-modo="lamina" data-colores="#F2B233,#E2592A,#6A4C93" data-fondo="#1F1B2D" aria-hidden="true"></canvas><canvas class="girC" aria-hidden="true"></canvas><div class="ct"><img src="<?php tf_img('ia8745bc028', TF_U . '/logo/h-oscuro-34.svg'); ?>" data-tf-img="ia8745bc028" alt="Transfronteriza"></div></div></button>
      <div class="txt">
        <h2 data-tf="tfa62384e84"><?php tf_t('tfa62384e84'); ?></h2>
        <p data-tf="te961d06a3f"><?php tf_t('te961d06a3f'); ?></p>
        <p data-tf="t8dd1d53397"><?php tf_t('t8dd1d53397'); ?></p>
        <div class="acts"><button class="btn g" type="button" data-abre="informe" data-tf="t927afcef51"><?php tf_t('t927afcef51'); ?></button><a class="btn l" href="#hablemos" data-tf="t7420f5b191"><?php tf_t('t7420f5b191'); ?></a></div>
      </div>
    </div>
    <?php tf_informe_bloque(); ?>
  </section>

  <!-- 3 · Papers -->
  <section class="sec in" id="papers" style="padding-top:0" data-tf-sec="papers" data-tf-panel="edit.php?post_type=tf_paper" data-tf-panel-t="Editar los papers">
    <div class="sec-h">
      <div><h2 data-tf="t0ef101bafe"><?php tf_t('t0ef101bafe'); ?></h2><p data-ec-no="papers" data-tf="t8448cf18a5"><?php tf_t('t8448cf18a5'); ?></p><p data-ec="papers" hidden data-tf="tc50a831aae"><?php tf_t('tc50a831aae'); ?></p></div>
      <?php tf_filtros(); ?>
    </div>
    <ul class="papers" id="papersList"></ul>
  </section>

  <!-- 4 · Consejo -->
  <section class="sec in" id="consejo" style="padding-top:0" data-tf-sec="consejo" data-tf-panel="edit.php?post_type=tf_persona" data-tf-panel-t="Editar el Consejo">
    <div class="sec-h"><div><h2 data-tf="t8fb259eb70"><?php tf_t('t8fb259eb70'); ?></h2><p data-ec-no="consejo" data-tf="taceccb5a5c"><?php tf_t('taceccb5a5c'); ?></p><p data-ec="consejo" hidden data-tf="tb4a354c8b8"><?php tf_t('tb4a354c8b8'); ?></p></div></div>
    <ul class="consejo" id="consejoList"></ul>
  </section>

  <!-- Transparencia -->
  <section class="sec in" id="transparencia" style="padding-top:0" data-tf-sec="transparencia" data-tf-panel="edit.php?post_type=tf_documento" data-tf-panel-t="Editar los documentos">
    <div class="sec-h"><div><h2 data-tf="t3fff3b3af0"><?php tf_t('t3fff3b3af0'); ?></h2><p data-tf="t54bc0e2ba7"><?php tf_t('t54bc0e2ba7'); ?></p></div></div>
    <?php tf_documentos(); ?>
    <p class="reg" data-tf="tc6f0ef7565"><?php tf_t('tc6f0ef7565'); ?></p>
  </section>

  <!-- 5 · Hablemos -->
  <section class="in" id="hablemos" data-tf-sec="hablemos">
    <div class="hab">
      <div><h2 data-tf="td8c0f820e5"><?php tf_t('td8c0f820e5'); ?></h2><p class="sub" data-tf="t9a0e0eed9a"><?php tf_t('t9a0e0eed9a'); ?></p></div>
      <form class="hform" id="hform" novalidate>
        <div id="h1s"><div class="caja"><input type="email" id="h-correo" placeholder="Tu correo" autocomplete="email" aria-label="Tu correo"><button class="btn g" type="submit" data-tf="t29c14fc02f"><?php tf_t('t29c14fc02f'); ?></button></div></div>
        <div id="h2s" hidden class="hform">
          <div class="two"><label class="f">Tu nombre<input type="text" id="h-nombre" autocomplete="name"></label><label class="f">Tu organización<input type="text" id="h-org" autocomplete="organization"></label></div>
          <p class="q" data-tf="t96042621d8"><?php tf_t('t96042621d8'); ?></p>
          <div class="chips">
            <label><input type="radio" name="tipo" checked><span>Medio de comunicación</span></label>
            <label><input type="radio" name="tipo"><span>Institución pública</span></label>
            <label><input type="radio" name="tipo"><span>Universidad o centro de estudios</span></label>
            <label><input type="radio" name="tipo"><span>Fundación o financiador</span></label>
            <label><input type="radio" name="tipo"><span>Empresa</span></label>
          </div>
          <label class="ok"><input type="checkbox" id="h-ok"><span>He leído la <button type="button" data-legal="privacidad" data-tf="t3ef10fc331"><?php tf_t('t3ef10fc331'); ?></button>. Usamos tu correo solo para responderte; puedes pedir ver o borrar tus datos en hola@transfronteriza.net.</span></label>
          <label class="ok"><input type="checkbox" id="h-boletin"><span>Quiero recibir <b>Lo que se mueve</b>: un correo al mes con lo que pasa en Transfronteriza y en Futuros. Baja en un clic.</span></label>
          <div><button class="btn g" type="submit" data-tf="t61b0418ae4"><?php tf_t('t61b0418ae4'); ?></button></div>
        </div>
        <div class="gracias" id="h3s" hidden><h3 id="hT">Gracias.</h3><p data-tf="ta5d4728d2e"><?php tf_t('ta5d4728d2e'); ?></p></div>
        <p class="err" id="herr" role="alert"></p>
      </form>
    </div>
  </section>
</main>

<footer class="foot"><div class="in">
  <form class="carta" id="carta" novalidate aria-label="Boletín">
    <h3 data-tf="t67ba6b1c91"><?php tf_t('t67ba6b1c91'); ?></h3>
    <div class="campos"><input type="email" id="c-correo" placeholder="Tu correo" autocomplete="email" aria-label="Tu correo"><button class="btn" type="submit" data-tf="tb9147c5d9e"><?php tf_t('tb9147c5d9e'); ?></button></div>
    <label class="ok"><input type="checkbox" id="c-boletin"><span>Acepto la <button type="button" data-legal="privacidad" data-tf="tc8f28f06dd"><?php tf_t('tc8f28f06dd'); ?></button>.</span></label>
    <p class="err" id="cartaE" role="alert"></p>
    <p class="hecho" id="cartaOk" hidden>Te hemos escrito. Confirma desde tu correo y listo.</p>
  </form>
  <div class="row"><img class="flogo" src="<?php tf_img('ia8745bc028', TF_U . '/logo/h-oscuro-34.svg'); ?>" data-tf-img="ia8745bc028" alt="Transfronteriza"><nav aria-label="Pie"><a href="<?php echo esc_url(tf_pagina('comunidad')); ?>" data-tf="t38114eb012"><?php tf_t('t38114eb012'); ?></a><a href="<?php echo esc_url(tf_pagina('futuros')); ?>" data-tf="tf6078594dd"><?php tf_t('tf6078594dd'); ?></a><a href="<?php echo esc_url(home_url('/')); ?>#descubre" data-tf="t3158ca410d"><?php tf_t('t3158ca410d'); ?></a><a href="mailto:hola@transfronteriza.net" data-tf="ta0aa22019a"><?php tf_t('ta0aa22019a'); ?></a></nav></div>
  <div class="leg"><span>© 2026 Asociación Juvenil Transfronteriza</span><span><button type="button" data-legal="aviso" data-tf="t2a27eb438d"><?php tf_t('t2a27eb438d'); ?></button> · <button type="button" data-legal="privacidad" data-tf="tcd9bcb9fd2"><?php tf_t('tcd9bcb9fd2'); ?></button> · <button type="button" data-legal="cookies" data-tf="t53614378a5"><?php tf_t('t53614378a5'); ?></button></span></div>
</div></footer>

<!-- lector de papers e informe -->
<div class="lector" id="lector" role="dialog" aria-modal="true" aria-labelledby="lTit" hidden>
  <div class="barra">
    <img class="logo o" src="<?php tf_img('ia8745bc028', TF_U . '/logo/h-oscuro-34.svg'); ?>" data-tf-img="ia8745bc028" alt="Transfronteriza"><img class="logo c" src="<?php tf_img('i9aac151d2b', TF_U . '/logo/h-color-34.svg'); ?>" data-tf-img="i9aac151d2b" alt="Transfronteriza">
    <button class="icon" type="button" id="lMenos" aria-label="Letra más pequeña">A−</button>
    <button class="icon" type="button" id="lMas" aria-label="Letra más grande">A+</button>
    <button class="icon" type="button" id="lModo" aria-label="Cambiar a modo papel"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"><circle cx="12" cy="12" r="4.5"/><path d="M12 2.5v2M12 19.5v2M2.5 12h2M19.5 12h2M5.3 5.3l1.4 1.4M17.3 17.3l1.4 1.4M5.3 18.7l1.4-1.4M17.3 6.7l1.4-1.4"/></svg></button>
    <button class="icon" type="button" id="lLink" aria-label="Copiar enlace"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M10 14a4.5 4.5 0 0 0 6.4 0l3-3a4.5 4.5 0 0 0-6.4-6.4l-1.1 1.1"/><path d="M14 10a4.5 4.5 0 0 0-6.4 0l-3 3a4.5 4.5 0 0 0 6.4 6.4l1.1-1.1"/></svg></button>
    <button class="icon" type="button" id="lX" aria-label="Cerrar" style="font-size:20px">×</button>
    <span class="prog" id="lProg"></span>
  </div>
  <article class="art" id="lArt"></article>
</div>
<dialog class="entrar" id="entrar" aria-labelledby="entT"><div class="marco"><button class="x" type="button" data-cierra aria-label="Cerrar">×</button><svg class="xf" viewBox="0 0 48 48" aria-hidden="true"><path d="M9 8.5h16.5a6 6 0 0 1 6 6v7.5a6 6 0 0 1-6 6H17l-6.5 5.5V28H9a6 6 0 0 1-6-6v-7.5a6 6 0 0 1 6-6z" fill="none" stroke="currentColor" stroke-width="2.8" stroke-linejoin="round"/><path d="M23 19h16a6 6 0 0 1 6 6v7a6 6 0 0 1-6 6h-1.5v5.5L31 38h-8a6 6 0 0 1-6-6v-7a6 6 0 0 1 6-6z" fill="#E2592A"/><circle class="punto" cx="41" cy="9" r="4.2" fill="#F2B233"/></svg><div id="entA"><h3 id="entT">Entra en La Frontera</h3><p data-tf="t9834a96e12"><?php tf_t('t9834a96e12'); ?></p><form id="entF" novalidate><input type="email" id="ent-correo" placeholder="Tu correo" autocomplete="email" aria-label="Tu correo"><label class="ok"><input type="checkbox" id="ent-ok"><span>He leído la <button type="button" data-legal="privacidad" data-tf="t3ef10fc331"><?php tf_t('t3ef10fc331'); ?></button>. Guardamos tu correo solo para avisarte cuando abra La Frontera.</span></label><p class="err" id="entE" role="alert"></p><button class="btn p" type="submit" data-tf="t17c8912d40"><?php tf_t('t17c8912d40'); ?></button></form><p class="nueva">¿Aún no eres parte? <a href="<?php echo esc_url(home_url('/')); ?>#descubre" data-cierra-entrar data-tf="t3158ca410d"><?php tf_t('t3158ca410d'); ?></a></p></div><div id="entB" hidden><h3 data-tf="tb94238ba26"><?php tf_t('tb94238ba26'); ?></h3><p id="entBp"></p></div></div></dialog>
<div class="puerta" id="puerta" role="complementary" aria-label="Súmate"><p data-tf="tb24422f947"><?php tf_t('tb24422f947'); ?></p><a class="btn" href="<?php echo esc_url(home_url('/')); ?>#descubre" data-tf="t3158ca410d"><?php tf_t('t3158ca410d'); ?></a><button class="cx" type="button" aria-label="Cerrar">×</button></div>
<div class="aviso" id="aviso" role="status"></div>

<dialog class="perfil" id="perfil" aria-labelledby="pNombre">
  <div class="marco">
    <div class="ft"><img id="pFoto" src="" alt=""><div id="pLuz" class="silL" hidden></div></div>
    <div class="tx">
      <canvas id="pPep" aria-hidden="true"></canvas>
      <h3 id="pNombre"></h3>
      <p class="rol" id="pRol"></p>
      <p class="bio" id="pBio"></p>
      <div class="pie"><span id="pNum"></span><div class="flechas"><button class="icon" type="button" id="pAnt" aria-label="Anterior">←</button><button class="icon" type="button" id="pSig" aria-label="Siguiente">→</button></div></div>
      <button class="icon cerrar" type="button" id="pX" aria-label="Cerrar">×</button>
    </div>
  </div>
</dialog>

<dialog class="legal" id="legal" aria-label="Información legal">
  <div class="marco">
    <div class="tabs" role="tablist"><button type="button" role="tab" data-tab="aviso" data-tf="t2a27eb438d"><?php tf_t('t2a27eb438d'); ?></button><button type="button" role="tab" data-tab="privacidad" data-tf="tcd9bcb9fd2"><?php tf_t('tcd9bcb9fd2'); ?></button><button type="button" role="tab" data-tab="cookies" data-tf="t53614378a5"><?php tf_t('t53614378a5'); ?></button></div>
    <div class="pan" data-pan="aviso"><h3 data-tf="tb746b8f804"><?php tf_t('tb746b8f804'); ?></h3><p data-tf="t72a4100e93"><?php tf_t('t72a4100e93'); ?></p><p data-tf="t48b9f9d455"><?php tf_t('t48b9f9d455'); ?></p></div>
    <div class="pan" data-pan="privacidad" hidden><h3 data-tf="t48532db43b"><?php tf_t('t48532db43b'); ?></h3><p data-tf="t2305d32623"><?php tf_t('t2305d32623'); ?></p><p data-tf="t9d528350e7"><?php tf_t('t9d528350e7'); ?></p><p data-tf="tddb282a99c"><?php tf_t('tddb282a99c'); ?></p><p data-tf="t9f2bf10e65"><?php tf_t('t9f2bf10e65'); ?></p><p data-tf="t166c9b82c7"><?php tf_t('t166c9b82c7'); ?></p><p data-tf="te6be6faa4e"><?php tf_t('te6be6faa4e'); ?></p><p data-tf="t6e74bf0644"><?php tf_t('t6e74bf0644'); ?></p><p data-tf="td9a36501db"><?php tf_t('td9a36501db'); ?></p></div>
    <div class="pan" data-pan="cookies" hidden><h3 data-tf="t9d768186f8"><?php tf_t('t9d768186f8'); ?></h3><p data-tf="t54e3f07ee2"><?php tf_t('t54e3f07ee2'); ?></p><p data-tf="t514e195734"><?php tf_t('t514e195734'); ?></p></div>
    <button class="icon cerrar" type="button" id="legalX" aria-label="Cerrar">×</button>
  </div>
</dialog>

<?php tf_script_base(tf_datos_futuros()); ?>
<script>
(() => {
  /* menú del móvil */
  (() => { const b = document.querySelector('.mnu'), p = document.getElementById('mnuP'); if (!b || !p) return;
    const pon = v => { p.hidden = !v; b.setAttribute('aria-expanded', v); b.setAttribute('aria-label', v ? 'Cerrar el menú' : 'Abrir el menú'); document.documentElement.style.overflow = v ? 'hidden' : ''; };
    b.addEventListener('click', () => pon(p.hidden)); p.addEventListener('click', e => { if (e.target.closest('a')) pon(false); });
    addEventListener('keydown', e => { if (e.key === 'Escape' && !p.hidden) pon(false); }); addEventListener('resize', () => { if (innerWidth > 1000 && !p.hidden) pon(false); }); })();
  /* marcas para «Editar esta página»: solo salen cuando el dato viene de WordPress */
  const ED = (id, c) => id ? ` data-tf-c="p${id}.${c}"` : '', EF = id => id ? ` data-tf-f="p${id}"` : '', EI = (id, t) => id ? ` data-tf-item="${id}" data-tf-tipo="${t}"` : '';
  /* cada página empieza arriba (salvo que se abra en un apartado); un enlace a la misma página sube al principio */
  if ('scrollRestoration' in history) history.scrollRestoration = 'manual';
  let tocado = false; ['wheel', 'touchstart', 'keydown', 'pointerdown'].forEach(t => addEventListener(t, () => tocado = true, { once: true, passive: true }));
  const arriba = () => { if (!location.hash && !tocado) scrollTo(0, 0); };
  arriba(); addEventListener('DOMContentLoaded', arriba); addEventListener('load', arriba); addEventListener('pageshow', arriba); setTimeout(arriba, 350);
  document.addEventListener('click', e => { const a = e.target.closest('a[href]'); if (!a || a.target || a.hasAttribute('download')) return; const u = new URL(a.href, location.href); if (u.pathname === location.pathname && !u.hash && u.search === location.search) { e.preventDefault(); scrollTo({ top: 0, behavior: 'smooth' }); } });
  const reduce = matchMedia('(prefers-reduced-motion: reduce)').matches;
  const DPR = Math.min(2, devicePixelRatio || 1), GA = Math.PI * (3 - Math.sqrt(5)), TAU = Math.PI * 2;
  const K = { papel: '#F5EEDF', oroN: '#FCD35A', fuegoN: '#FC8A45' };
  const $ = s => document.querySelector(s);
  const hx = h => [1, 3, 5].map(i => parseInt(h.slice(i, i + 2), 16));
  const mix = (a, b, t) => { const A = hx(a), B = hx(b); return '#' + A.map((v, i) => Math.round(v + (B[i] - v) * t).toString(16).padStart(2, '0')).join(''); };
  const rng = a => () => { a |= 0; a = a + 0x6D2B79F5 | 0; let t = Math.imul(a ^ a >>> 15, 1 | a); t = t + Math.imul(t ^ t >>> 7, 61 | t) ^ t; return ((t ^ t >>> 14) >>> 0) / 4294967296; };
  const setup = (cv, d = DPR) => { const w = cv.clientWidth, h = cv.clientHeight; cv.width = Math.max(1, Math.round(w * d)); cv.height = Math.max(1, Math.round(h * d)); const g = cv.getContext('2d'); g.setTransform(d, 0, 0, d, 0, 0); return [g, w, h]; };
  /* la pepita del manual */
  const seedAt = (g, x, y, rad, a, col, r) => {
    const p = new Path2D(), ca = Math.cos(a), sa = Math.sin(a);
    for (let k = 0; k <= 14; k++) { const b = k / 14 * TAU, q = 1 + (r() - .5) * .2, u = Math.cos(b) * rad * 1.1 * q, v = Math.sin(b) * rad * .9 * q; const px = x + u * ca - v * sa, py = y + u * sa + v * ca; k ? p.lineTo(px, py) : p.moveTo(px, py); }
    p.closePath(); g.fillStyle = col; g.fill(p);
    g.save(); g.clip(p); g.lineCap = 'round';
    const n = rad > 14 ? 4 : rad > 6 ? 3 : 2;
    for (let k = 0; k < n; k++) { g.strokeStyle = r() < .55 ? '#FCE7AE' : mix(col, '#3A1A08', .28); g.globalAlpha = .22 + r() * .26; g.lineWidth = Math.max(.5, rad * (.12 + r() * .1)); const o = (r() - .5) * rad * 1.3; g.beginPath(); g.moveTo(x - ca * rad * 1.2 - sa * o, y - sa * rad * 1.2 + ca * o); g.lineTo(x + ca * rad * 1.2 - sa * o, y + sa * rad * 1.2 + ca * o); g.stroke(); }
    if (rad > 10) for (let k = 0; k < rad * 2; k++) { g.fillStyle = r() < .5 ? '#fff4d6' : '#5a2a0a'; g.globalAlpha = .08 + r() * .1; g.fillRect(x + (r() - .5) * rad * 2, y + (r() - .5) * rad * 2, 1, 1); }
    g.restore(); g.globalAlpha = 1;
  };
  /* el girasol de la ilustración, en papel, asomando por la esquina de la lámina */
  const symbol = (g, cx, cy, R, N, cA, cB, r, clip) => { const c = R / Math.sqrt(N), vw = clip || [-1e9, -1e9, 1e9, 1e9]; for (let i = 1; i <= N; i++) { const a = i * GA, d = c * Math.sqrt(i), x = cx + Math.cos(a) * d, y = cy + Math.sin(a) * d, t = i / N, rad = c * (.56 + .16 * t); if (x + rad < vw[0] || y + rad < vw[1] || x - rad > vw[2] || y - rad > vw[3]) { r(); continue; } seedAt(g, x, y, rad, a, mix(cA, cB, Math.pow(t, .6)), r); } };
  const pepBlanca = (cv, s) => { const [g, w] = setup(cv), r = rng(s * 131 + 7); seedAt(g, w / 2, w / 2, w * .32, r() * TAU, K.papel, r); };
  const pinta = new Map(), ro = new ResizeObserver(es => es.forEach(e => { if (e.contentRect.width > 0) pinta.get(e.target)?.(); }));
  const vigila = (cv, fn) => { pinta.set(cv, fn); ro.observe(cv); };
  const aviso = (() => { let t; return m => { const a = $('#aviso'); a.textContent = m; a.classList.add('on'); clearTimeout(t); t = setTimeout(() => a.classList.remove('on'), 2200); }; })();
  /* las luces con nombre (manual v3): modo, colores y fondo; luzCanvas() devuelve el lienzo listo para el motor */
  const LUCES = {
    ciudad: ['converge', '#F2B233,#E2592A,#2F4FA8', '#EFE6DA'], encuentro: ['sierra', '#F2B233,#E2A0A6,#5E8F4E', '#DCD9E6'], frontera: ['orillas', '#2F4FA8,#F2B233,#E2A0A6', '#EFE6DA'],
    viaje: ['sube', '#F2B233,#2F4FA8,#FFFBF2', '#E6E1E8'], ondas: ['ondas', '#F2B233,#E2592A,#6A4C93', '#EFE6DA'], voz: ['sube', '#F2B233,#E2592A,#CDCFE6', '#1F1B2D'],
    lamina: ['lamina', '#F2B233,#E2592A,#E3DCE6', '#E6E0E6'], noche: ['lamina', '#F2B233,#E2592A,#6A4C93', '#1F1B2D'], mar: ['mar', '#2F4FA8,#5B6FBF,#CDCFE6', '#CDCFE6'],
    idiomas: ['corrientes', '#2F4FA8,#F2B233,#E2592A', '#EFE6DA'], escuela: ['capa', '#F2B233,#E2592A,#2F4FA8', '#EFE6DA'], orillas: ['orillas', '#F2B233,#5E8F4E,#E2592A', '#EFE6DA'],
    retrato1: ['lamina', '#2F4FA8,#F2B233,#CDCFE6', '#DDD6DF'], retrato2: ['lamina', '#F2B233,#E2A0A6,#CDCFE6', '#E6DCE0'],
    sil1: ['sube', '#F2B233,#E2592A,#FFFBF2', '#1F1B2D'], sil2: ['sube', '#CDCFE6,#2F4FA8,#FFFBF2', '#1F1B2D'], sil3: ['sube', '#E2A0A6,#6A4C93,#FFFBF2', '#1F1B2D'], sil4: ['sube', '#FFFBF2,#F2B233,#CDCFE6', '#1F1B2D']
  };
  const luzCanvas = (n, extra = '') => { const [m, c, f] = LUCES[n] || LUCES.lamina; return `<canvas class="luz${extra}" data-modo="${m}" data-colores="${c}" data-fondo="${f}" aria-hidden="true"></canvas>`; };
  const luzArranca = () => window.Luz && window.Luz.arranca();
  const ANON = '<svg class="anon" viewBox="0 0 48 48" aria-hidden="true"><circle cx="24" cy="24" r="21" fill="none" stroke="currentColor" stroke-width="2"/><path d="M14 30c2-5 6-7 10-7s8 2 10 7" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"/><circle cx="24" cy="17" r="4" fill="none" stroke="currentColor" stroke-width="2"/></svg>';
  /* qué está todavía en construcción: en WordPress lo decide tf_en_construccion(); aquí, estos valores */
  window.TF = window.TF || {};
  const EC = Object.assign({ voces: true, informe: true, papers: true, consejo: true }, TF.enConstruccion || {});
  document.querySelectorAll('[data-ec]').forEach(e => e.hidden = !EC[e.dataset.ec]);
  document.querySelectorAll('[data-ec-no]').forEach(e => { if (EC[e.dataset.ecNo]) e.remove(); });
  if (EC.informe) $('.inf:not(.obra)')?.remove();

  /* la portada del informe en marcha: el girasol blanco sobre la luz de fuego */
  (() => { const cv = $('.cover .girC'); if (!cv) return; vigila(cv, () => { const [g, w, h] = setup(cv); symbol(g, w * .78, h * .70, Math.max(w, h) * .27, 200, '#FFFBF2', K.papel, rng(90), [0, 0, w, h]); }); })();
  /* 1 · la lámina: el girasol grande, de papel, cortado por la esquina */
  (() => { const cv = $('#girasolF'); if (!cv) return; vigila(cv, () => { const [g, w, h] = setup(cv); const R = Math.max(w, h) * .3; symbol(g, w * .78, h * .70, R, 420, '#FFFBF2', K.papel, rng(90), [0, 0, w, h]); }); })();

  /* 2 · informe y 3 · papers, con su lector */
  const A = TF.autores || {}, P = TF.papers || [], INF = TF.informe || { id: 'informe', informe: true, h: '', d: '', lead: '', html: '', claves: [] };
  const pl = $('#papersList');
  const aid = a => (/^p(\d+)$/.exec(a || '') || [])[1];
  /* mientras se escriben: lo que pretendemos, con el mismo lector; las portadas vienen con cada paper */
  P.forEach(p => { p.banda = p.banda || `<?php echo TF_U; ?>/img/papers/${p.id}.jpg`; }); if (INF) INF.portada = INF.portada || '<?php echo TF_U; ?>/img/papers/informe.jpg';
  const PO = [
    { id: 'pre-educacion', obra: 1, t: 'Educación', h: 'Lo que la escuela no ve', d: 'En preparación', luz: 'escuela', banda: '',
      lead: 'Queremos saber qué pasa entre el instituto y la universidad para que lleguen tan pocas jóvenes de familia migrante, y qué hacen los centros que sí lo consiguen.',
      b: [['h', 'Qué pretendemos'], ['p', 'Comparar los datos oficiales de abandono y acceso con lo que cuentan las propias alumnas: orientación, expectativas del profesorado, idiomas que no puntúan.'], ['d', '28 %', 'de la segunda generación llega a la universidad. Del resto de jóvenes, el 43 %.'], ['h', 'Con quién'], ['p', 'Con docentes de institutos de Andalucía y jóvenes de la comunidad que acaban de pasar por ello. Si eres una de ellas, o de ellos, te queremos en este paper.']] },
    { id: 'pre-empleo', obra: 1, t: 'Empleo', h: 'Tres idiomas que el currículum no cuenta', d: 'En preparación', luz: 'idiomas', banda: '',
      lead: 'Las jóvenes transfronterizas hablan dos, tres o cuatro lenguas. Queremos medir cuántas de esas lenguas aparecen en un contrato y proponer cómo certificarlas.',
      b: [['h', 'Qué pretendemos'], ['p', 'Una encuesta breve a jóvenes de la comunidad sobre las lenguas que usan en casa y en el trabajo, y entrevistas a empresas que las buscan y no las encuentran.'], ['h', 'Para qué'], ['p', 'Para pedir a las escuelas oficiales de idiomas que certifiquen gratis las lenguas de herencia, y a las empresas que pregunten por ellas.']] },
    { id: 'pre-estrecho', obra: 1, t: 'Territorio', h: 'Una ciudad en dos orillas', d: 'En preparación', luz: 'orillas', banda: '',
      lead: 'Entre Algeciras y Tánger hay familias, comercios y fiestas que viven a los dos lados. Nadie las cuenta. Queremos empezar a contarlas.',
      b: [['h', 'Qué pretendemos'], ['p', 'Un primer mapa de la vida transfronteriza del Estrecho: cuántas personas cruzan cada verano, cuántos negocios dependen de ambas orillas, qué pasa con los papeles.'], ['h', 'Con quién'], ['p', 'Con la comunidad de Algeciras y con quien quiera sumarse desde la otra orilla.']] }
  ];
  const INFO = { id: 'informe', obra: 1, informe: true, h: 'El primer informe está en marcha', d: 'Informe anual, en preparación', luz: 'noche', portada: '',
    lead: 'Una de cada tres criaturas que nacen en España tiene una madre nacida en otro país. El primer informe de Transfronteriza estudia cómo cuidar y acoger a las jóvenes que crecen entre países, idiomas y culturas, y qué puede hacer cada ciudad por ellas.',
    b: [['h', 'Qué vamos a investigar'], ['p', 'Qué necesita una joven transfronteriza para sentirse en casa: en la escuela, en el barrio, en el trabajo y en la vida pública. Y qué hacen ya las comunidades que acogen bien, para aprender de ellas. Con datos públicos, con las voces de la comunidad y con las personas que ya lo han estudiado.'], ['h', 'Cómo'], ['p', 'Una encuesta a la comunidad, entrevistas en los encuentros y en las ciudades, y un Consejo que vele por el rigor y la independencia del trabajo.'], ['h', 'Cuándo'], ['p', 'Lo presentaremos en 2027. Antes irán saliendo los primeros papers, y en el boletín contaremos cada paso.'], ['q', 'Hecho con ellas, no sobre ellas.'], ['h', 'Cómo ayudar'], ['p', 'Si tienes datos, una historia, una investigación o ganas de ayudar, escríbenos.']] };
  const PP = EC.papers ? PO : P, INFX = EC.informe ? INFO : INF;
  const tarjeta = (p, i) => `<li data-t="${p.t}"${EI(p.pid, 'tf_paper')}><button class="paper" type="button" data-abre="${p.id}"><h3${ED(p.pid, 'titulo')}>${p.h}</h3><div class="banda"${EF(p.pid)}>${p.luz ? luzCanvas(p.luz) : `<img src="${p.banda}" alt="" loading="lazy">`}</div><div class="por">${p.obra ? `<canvas class="pep" data-s="${i + 20}" aria-hidden="true"></canvas>` : `<img src="${(A[p.a] || [])[3] || ''}" alt="" loading="lazy">`}<div><span${ED(aid(p.a), 'titulo')}>${p.obra ? 'En preparación' : A[p.a][0]}</span><small${ED(aid(p.a), 'cargo')}>${p.obra ? p.t : A[p.a][1]}</small></div></div></button></li>`;
  pl.innerHTML = PP.map(tarjeta).join('');
  pl.querySelectorAll('.pep').forEach(cv => vigila(cv, () => pepBlanca(cv, +cv.dataset.s))); luzArranca();
  $('#filtros')?.addEventListener('click', e => { const b = e.target.closest('button'); if (!b) return; document.querySelectorAll('#filtros button').forEach(x => x.setAttribute('aria-pressed', x === b)); pl.querySelectorAll('li').forEach(li => li.hidden = b.dataset.t !== 'todos' && li.dataset.t !== b.dataset.t); });

  const lector = $('#lector'), art = $('#lArt');
  let fs = 19, antesFoco = null, antesY = 0;
  const bloque = ([k, x, y]) => k === 'p' ? `<p>${x}</p>` : k === 'h' ? `<h2>${x}</h2>` : k === 'q' ? `<blockquote>«${x}»</blockquote>` : `<div class="dato"><b>${x}</b><p>${y}</p></div>`;
  const prog = () => { const m = lector.scrollHeight - lector.clientHeight; $('#lProg').style.width = (m > 0 ? lector.scrollTop / m * 100 : 0) + '%'; };
  const abre = id => {
    const p = id === 'informe' ? INFX : PP.find(x => x.id === id); if (!p) return;
    if (lector.hidden) { antesFoco = document.activeElement; antesY = scrollY; }
    const au = p.informe || p.obra ? null : A[p.a], i = PP.indexOf(p), nx = p.informe ? PP[0] : PP[(i + 1) % PP.length];
    art.innerHTML = `<div class="ab${p.informe ? ' informe' : ''}">${p.luz ? luzCanvas(p.luz) : `<img src="${p.informe ? p.portada : p.banda}" alt="" loading="lazy" decoding="async">`}</div>
      <h1 id="lTit">${p.h}</h1>
      <div class="firma">${au ? `<img src="${au[3]}" alt="">` : `<img class="marcaF" src="<?php echo TF_U; ?>/logo/girasol-color.svg" alt="">`}<div>${au ? au[0] : 'Transfronteriza'}<small>${au ? au[1] + ' · ' : ''}${p.d}</small></div></div>
      <p class="lead">${p.lead}</p>
      <div class="cuerpo">${(p.claves || []).map(c => bloque(['d', c[0], c[1]])).join('')}${p.html || (p.b || []).map(bloque).join('')}</div>
      ${p.obra ? `<div class="acts"><a class="btn g" href="#hablemos" data-cierra-lector>${p.informe ? 'Cuéntanoslo' : 'Quiero sumarme a este paper'}</a><a class="btn l" href="mailto:hola@transfronteriza.net">hola@transfronteriza.net</a></div>` : p.informe ? `<div class="acts"><a class="btn g" href="${INF.pdf || '#'}" download>Descargar el informe completo</a></div>` : `<div class="autora"><img src="${au[3]}" alt="${au[0]}"><div><h3>${au[0]}</h3><p class="r">${au[1]}</p><p class="b">${au[2]}</p></div></div>`}
      ${nx && nx !== p ? `<button class="sig" type="button" data-abre="${nx.id}"><div><small>${p.informe ? 'Primer paper' : 'Siguiente paper'}</small><b>${nx.h}</b></div><i>→</i></button>` : ''}`;
    luzArranca(); lector.hidden = false; lector.scrollTop = 0; document.documentElement.style.overflow = 'hidden';
    history.replaceState(null, '', '#' + (p.informe ? 'leer-informe' : p.id)); $('#lX').focus({ preventScroll: true }); prog();
  };
  const cierra = () => { lector.hidden = true; document.documentElement.style.overflow = ''; history.replaceState(null, '', location.pathname + location.search); scrollTo(0, antesY); antesFoco?.focus?.({ preventScroll: true }); antesFoco = null; };
  lector.addEventListener('scroll', prog, { passive: true });
  document.addEventListener('click', e => { const b = e.target.closest('[data-abre]'); if (b) { e.preventDefault(); abre(b.dataset.abre); } if (e.target.closest('[data-cierra-lector]')) cierra(); });
  $('#lX').addEventListener('click', cierra);
  document.addEventListener('keydown', e => { if (e.key === 'Escape' && !lector.hidden) cierra(); });
  const setFs = v => { fs = Math.max(16, Math.min(24, v)); lector.style.setProperty('--fs', fs + 'px'); };
  $('#lMas').addEventListener('click', () => setFs(fs + 1)); $('#lMenos').addEventListener('click', () => setFs(fs - 1));
  $('#lModo').addEventListener('click', () => { const papel = lector.dataset.modo !== 'papel'; lector.dataset.modo = papel ? 'papel' : ''; $('#lModo').setAttribute('aria-label', papel ? 'Cambiar a modo oscuro' : 'Cambiar a modo papel'); try { localStorage.setItem('tf-modo', lector.dataset.modo); } catch (e) {} });
  try { if (localStorage.getItem('tf-modo') === 'papel') lector.dataset.modo = 'papel'; } catch (e) {}
  $('#lLink').addEventListener('click', () => { const u = location.href; (navigator.clipboard ? navigator.clipboard.writeText(u) : Promise.reject()).then(() => aviso('Enlace copiado')).catch(() => aviso(u)); });
  const deHash = () => { const h = location.hash.slice(1); if (h === 'leer-informe') abre('informe'); else if (PP.some(p => p.id === h)) abre(h); };
  deHash(); addEventListener('hashchange', deHash);

  /* 4 · consejo */
  const C = TF.consejo || [];
  const cl = $('#consejoList');
  /* mientras se convoca: las cuatro plazas, con su tarjeta y su ficha, como tendrán las personas */
  const CO = [
    ['luz:sil1', 'Una joven transfronteriza', '', 'Entre 18 y 30 años, de la comunidad. Alguien que haya crecido entre países y quiera velar por que Futuros hable con la voz de su generación, y no sobre ella. Una reunión al trimestre y mucha lectura. Si eres tú, escríbenos a hola@transfronteriza.net.'],
    ['luz:sil2', 'Una investigadora', '', 'De una universidad o un centro de estudios, en migraciones, educación, empleo, identidad o territorio. Su papel: cuidar el rigor de los datos y de las fuentes del informe y de los papers. Escríbenos a hola@transfronteriza.net.'],
    ['luz:sil3', 'Una persona de la comunidad', '', 'Una madre, un profesor, alguien de una asociación de barrio: quien conozca la vida transfronteriza desde dentro y pueda decirnos si lo que escribimos se parece a lo que pasa. Escríbenos a hola@transfronteriza.net.'],
    ['luz:sil4', 'Una persona de las instituciones', '', 'De la administración pública o de una fundación. Para que lo que proponemos llegue a quien decide y vuelva con respuesta. Escríbenos a hola@transfronteriza.net.']
  ];
  const CC = EC.consejo ? CO : C, foto = f => f;
  cl.innerHTML = CC.map(([f, n, r, b, id], i) => `<li${EI(id, 'tf_persona')}${EC.consejo ? ' class="obra"' : ''}><button class="mb" type="button" data-i="${i}" aria-haspopup="dialog"><div class="ft"${EF(id)}>${f.startsWith('luz:') ? `<div class="silL" aria-hidden="true">${luzCanvas(f.slice(4))}</div>` : `<img src="${foto(f)}" alt="${n}" loading="lazy">`}</div><h3><canvas class="pep" data-s="${i}" aria-hidden="true"></canvas><span${ED(id, 'titulo')}>${n}</span></h3>${r ? `<p${r.includes('. ') ? '' : ED(id, 'cargo')}>${r.split('. ').pop()}</p>` : ''}</button></li>`).join('');
  cl.querySelectorAll('.pep').forEach(cv => vigila(cv, () => pepBlanca(cv, +cv.dataset.s))); luzArranca();
  const dlg = $('#perfil'), pPep = $('#pPep');
  let cur = 0;
  dlg.classList.toggle('obra', EC.consejo);
  const show = i => { cur = (i + CC.length) % CC.length; const [f, n, r, b] = CC[cur]; const lz = f.startsWith('luz:'); $('#pFoto').hidden = lz; $('#pLuz').hidden = !lz; if (lz) { $('#pLuz').innerHTML = luzCanvas(f.slice(4)); luzArranca(); } else { $('#pFoto').src = foto(f); $('#pFoto').alt = n; } $('#pNombre').textContent = n; $('#pRol').textContent = r; $('#pRol').hidden = !r; $('#pBio').textContent = b; $('#pNum').textContent = `${cur + 1} de ${CC.length}`; requestAnimationFrame(() => pepBlanca(pPep, cur)); };
  cl.addEventListener('click', e => { const b = e.target.closest('.mb[data-i]'); if (!b) return; show(+b.dataset.i); dlg.showModal(); });
  $('#pAnt').addEventListener('click', () => show(cur - 1));
  $('#pSig').addEventListener('click', () => show(cur + 1));
  $('#pX').addEventListener('click', () => dlg.close());
  dlg.addEventListener('click', e => { if (e.target === dlg) dlg.close(); });
  dlg.addEventListener('keydown', e => { if (e.key === 'ArrowRight') show(cur + 1); if (e.key === 'ArrowLeft') show(cur - 1); });

  /* legal */
  const lg = $('#legal');
  const tab = t => { lg.querySelectorAll('[data-tab]').forEach(b => b.setAttribute('aria-selected', b.dataset.tab === t)); lg.querySelectorAll('[data-pan]').forEach(p => p.hidden = p.dataset.pan !== t); };
  document.addEventListener('click', e => { const b = e.target.closest('[data-legal]'); if (b) { e.preventDefault(); tab(b.dataset.legal); if (!lg.open) lg.showModal(); } const t = e.target.closest('[data-tab]'); if (t) tab(t.dataset.tab); });
  $('#legalX').addEventListener('click', () => lg.close());
  lg.addEventListener('click', e => { if (e.target === lg) lg.close(); });

  /* 5 · hablemos: primero el correo, luego quién eres */
  const hf = $('#hform'), s1 = $('#h1s'), s2 = $('#h2s'), s3 = $('#h3s'), err = $('#herr');
  let paso = 1;
  hf.addEventListener('submit', e => {
    e.preventDefault(); err.textContent = '';
    if (paso === 1) { const c = $('#h-correo').value.trim(); if (!/^\S+@\S+\.\S+$/.test(c)) { err.textContent = 'Escribe un correo válido.'; return; } s1.hidden = true; s2.hidden = false; paso = 2; $('#h-nombre').focus({ preventScroll: true }); return; }
    if (!$('#h-ok').checked) { err.textContent = 'Necesitamos que aceptes la información sobre privacidad.'; return; }
    const n = $('#h-nombre').value.trim();
    hf.style.minHeight = hf.offsetHeight + 'px'; s2.hidden = true; s3.hidden = false;
    $('#hT').textContent = n ? `Gracias, ${n}.` : 'Gracias.';
    TF.enviar('hablemos', TF.leer(hf));
  });
  const top = $('#top'); const linea = () => top.classList.toggle('baja', scrollY > 8); addEventListener('scroll', linea, { passive: true }); linea();
  /* la puerta: aparece pasada la mitad de la página, una vez por visita, y nunca si ya has entrado por algún formulario */
  (() => { const p = document.getElementById('puerta'); if (!p) return; let fuera = false; try { fuera = sessionStorage.getItem('tf-puerta') === '1'; } catch (e) {}
    if (fuera) return; let abierta = false;
    const mira = () => { if (abierta || document.querySelector('dialog[open]') || !document.getElementById('paso')?.hidden && document.getElementById('paso')) { p.classList.remove('on'); return; } const h = document.documentElement.scrollHeight - innerHeight, y = scrollY / Math.max(1, h); p.classList.toggle('on', y > .42 && y < .96 && !document.getElementById('barraM')?.classList?.contains('on')); };
    addEventListener('scroll', mira, { passive: true }); setTimeout(mira, 600);
    const cierra = () => { abierta = true; p.classList.remove('on'); try { sessionStorage.setItem('tf-puerta', '1'); } catch (e) {} };
    p.querySelector('.cx').addEventListener('click', cierra);
    p.querySelector('.btn').addEventListener('click', e => { cierra(); if (p.dataset.flujo) { e.preventDefault(); null; } });
    document.addEventListener('submit', cierra, true); document.addEventListener('click', e => { if (e.target.closest('[data-flujo]')) cierra(); }, true);
  })();
  /* Lo que se mueve: el correo mensual, desde el pie */
  (() => { const f = document.getElementById('carta'); if (!f) return; f.addEventListener('submit', e => { e.preventDefault(); const er = document.getElementById('cartaE'), c = document.getElementById('c-correo').value.trim(); if (!/^\S+@\S+\.\S+$/.test(c)) { er.textContent = 'Escribe un correo válido.'; return; } if (!document.getElementById('c-boletin').checked) { er.textContent = 'Marca la casilla para que podamos escribirte.'; return; } er.textContent = ''; window.TF?.enviar?.('boletin', window.TF?.leer?.(f)); f.querySelector('.campos').hidden = true; f.querySelector('.ok').hidden = true; document.getElementById('cartaOk').hidden = false; }); })();
  /* La Frontera: entrar con un enlace al correo */
  (() => { const d = document.getElementById('entrar'); if (!d) return; document.addEventListener('click', e => { if (e.target.closest('[data-entrar]')) { e.preventDefault(); document.getElementById('entA').hidden = false; document.getElementById('entB').hidden = true; document.getElementById('entE').textContent = ''; d.showModal(); } if (e.target.closest('[data-cierra-entrar]')) d.close(); if (e.target.closest('#entrar [data-cierra]')) d.close(); }); d.addEventListener('click', e => { if (e.target === d) d.close(); }); document.getElementById('entF').addEventListener('submit', e => { e.preventDefault(); const c = document.getElementById('ent-correo').value.trim(); if (!/^\S+@\S+\.\S+$/.test(c)) { document.getElementById('entE').textContent = 'Escribe un correo válido.'; return; } if (!document.getElementById('ent-ok').checked) { document.getElementById('entE').textContent = 'Necesitamos que aceptes la información sobre privacidad.'; return; } document.getElementById('entBp').textContent = `Te escribiremos a ${c} en cuanto abramos La Frontera.`; TF.enviar('la-frontera', TF.leer(document.getElementById('entF'))); document.getElementById('entA').hidden = true; document.getElementById('entB').hidden = false; }); })();
  document.documentElement.dataset.done = 1;
})();
</script>
<script src="<?php echo TF_U; ?>/luz.js"></script>
<?php wp_footer(); ?>
</body>
</html>
