if(!self.define){const e=e=>{"require"!==e&&(e+=".js");let s=Promise.resolve();return c[e]||(s=new Promise((async s=>{if("document"in self){const c=document.createElement("script");c.src=e,document.head.appendChild(c),c.onload=s}else importScripts(e),s()}))),s.then((()=>{if(!c[e])throw new Error(`Module ${e} didn’t register its module`);return c[e]}))},s=(s,c)=>{Promise.all(s.map(e)).then((e=>c(1===e.length?e[0]:e)))},c={require:Promise.resolve(s)};self.define=(s,a,r)=>{c[s]||(c[s]=Promise.resolve().then((()=>{let c={};const i={uri:location.origin+s.slice(1)};return Promise.all(a.map((s=>{switch(s){case"exports":return c;case"module":return i;default:return e(s)}}))).then((e=>{const s=r(...e);return c.default||(c.default=s),c}))})))}}define("./sw.js",["./workbox-665b6cc9"],(function(e){"use strict";importScripts(),self.skipWaiting(),e.clientsClaim(),e.precacheAndRoute([{url:"/ModernizaWeb.png",revision:"7557efa8b10c9a14c0bd6c6d2cf10580"},{url:"/_next/static/caLDjvo8zLwPLX3oh_fIE/_buildManifest.js",revision:"caLDjvo8zLwPLX3oh_fIE"},{url:"/_next/static/caLDjvo8zLwPLX3oh_fIE/_ssgManifest.js",revision:"caLDjvo8zLwPLX3oh_fIE"},{url:"/_next/static/chunks/1bfc9850.83e64680f999dc2fcc8a.js",revision:"caLDjvo8zLwPLX3oh_fIE"},{url:"/_next/static/chunks/61b1ea224566ddce3af0d0b57d54bc25fb9054ef.4f5f59219cea5597d6e3.js",revision:"caLDjvo8zLwPLX3oh_fIE"},{url:"/_next/static/chunks/cfeca8435be7523937a650e9e4fa14d784973116.4a4f697524eafb1146f6.js",revision:"caLDjvo8zLwPLX3oh_fIE"},{url:"/_next/static/chunks/f550e2930b837130be0fc83ffc129b4adab76980.6ca486791a1c1a294776.js",revision:"caLDjvo8zLwPLX3oh_fIE"},{url:"/_next/static/chunks/framework.15878d4e523f86636251.js",revision:"caLDjvo8zLwPLX3oh_fIE"},{url:"/_next/static/chunks/main-89e831f4f14851681697.js",revision:"caLDjvo8zLwPLX3oh_fIE"},{url:"/_next/static/chunks/pages/404-b83ed6538e07461788c5.js",revision:"caLDjvo8zLwPLX3oh_fIE"},{url:"/_next/static/chunks/pages/_app-acae68034cb998fd262b.js",revision:"caLDjvo8zLwPLX3oh_fIE"},{url:"/_next/static/chunks/pages/_error-8bb1986f7e06d6155535.js",revision:"caLDjvo8zLwPLX3oh_fIE"},{url:"/_next/static/chunks/pages/contato-3e489322a8dd2f77cd41.js",revision:"caLDjvo8zLwPLX3oh_fIE"},{url:"/_next/static/chunks/pages/index-46175dc5af5a48aa0259.js",revision:"caLDjvo8zLwPLX3oh_fIE"},{url:"/_next/static/chunks/pages/sobre-8d5f764d94c90ab61bf1.js",revision:"caLDjvo8zLwPLX3oh_fIE"},{url:"/_next/static/chunks/polyfills-feb8a7604fa7fce626b2.js",revision:"caLDjvo8zLwPLX3oh_fIE"},{url:"/_next/static/chunks/webpack-50bee04d1dc61f8adf5b.js",revision:"caLDjvo8zLwPLX3oh_fIE"},{url:"/favicon.ico",revision:"21b739d43fcb9bbb83d8541fe4fe88fa"},{url:"/icon-192x192.png",revision:"d8f978e66755a47292ac470fa4ccef12"},{url:"/icon-256x256.png",revision:"77d61f47bc636fe07d342ef3bf0d5648"},{url:"/icon-384x384.png",revision:"3c9acf6e38b13f6c0456d78ce2f75508"},{url:"/icon-512x512.png",revision:"73441cdf29c2051587c609a6f534c36f"},{url:"/levir.svg",revision:"9ec07234a837ecd872d3b5053c220793"},{url:"/logo.svg",revision:"aba5be2cc7de5094c34809c7aaec4e15"},{url:"/lojavirtual.svg",revision:"4636ad26d96d05206eb7fda7ef197167"},{url:"/manifest.json",revision:"fedb4ce5963c0096c5b9dc0be2253852"},{url:"/marketing.svg",revision:"3a2afe7375d025d25ed1f27851634c0a"},{url:"/pwa.svg",revision:"5660d2fe061057ce6b219346978a56c6"},{url:"/robot.png",revision:"3d774cb35de57186b8485f5872dac576"},{url:"/robot.svg",revision:"80c1dc50ac160040268804028f5dddc7"},{url:"/savio.svg",revision:"c9493dfb5bcc9d5e19307494f772ff25"},{url:"/site.svg",revision:"2fd4e47a0264d825c554b3db40feb4e8"},{url:"/trafego.svg",revision:"1075672cdcc023e8ab8cf76969812086"},{url:"/vercel.svg",revision:"26bf2d0adaf1028a4d4c6ee77005e819"}],{ignoreURLParametersMatching:[]}),e.cleanupOutdatedCaches(),e.registerRoute("/",new e.NetworkFirst({cacheName:"start-url",plugins:[{cacheWillUpdate:async({request:e,response:s,event:c,state:a})=>s&&"opaqueredirect"===s.type?new Response(s.body,{status:200,statusText:"OK",headers:s.headers}):s}]}),"GET"),e.registerRoute(/.(?:eot|otf|ttc|ttf|woff|woff2|font.css)$/i,new e.NetworkFirst({cacheName:"static-font-assets",plugins:[new e.ExpirationPlugin({maxEntries:4,maxAgeSeconds:604800,purgeOnQuotaError:!0})]}),"GET"),e.registerRoute(/.(?:jpg|jpeg|gif|png|svg|ico|webp)$/i,new e.NetworkFirst({cacheName:"static-image-assets",plugins:[new e.ExpirationPlugin({maxEntries:64,maxAgeSeconds:86400,purgeOnQuotaError:!0})]}),"GET"),e.registerRoute(/.(?:js)$/i,new e.NetworkFirst({cacheName:"static-js-assets",plugins:[new e.ExpirationPlugin({maxEntries:16,maxAgeSeconds:86400,purgeOnQuotaError:!0})]}),"GET"),e.registerRoute(/.(?:css|less)$/i,new e.NetworkFirst({cacheName:"static-style-assets",plugins:[new e.ExpirationPlugin({maxEntries:16,maxAgeSeconds:86400,purgeOnQuotaError:!0})]}),"GET"),e.registerRoute(/.(?:json|xml|csv)$/i,new e.NetworkFirst({cacheName:"static-data-assets",plugins:[new e.ExpirationPlugin({maxEntries:16,maxAgeSeconds:86400,purgeOnQuotaError:!0})]}),"GET"),e.registerRoute(/.*/i,new e.NetworkFirst({cacheName:"others",plugins:[new e.ExpirationPlugin({maxEntries:16,maxAgeSeconds:86400,purgeOnQuotaError:!0})]}),"GET")}));