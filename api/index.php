<!DOCTYPE html><html lang="en-US" dir="ltr"><head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no" />
  <title>Github Releases Blog</title>
  <meta name="keywords" content="Github, Releases, Blog" />
  <meta name="description" content="Github Releases Blog" />
  <meta name="robots" content="follow,index" />
  <meta name="author" content="9r3i" />
  <meta name="uri" content="https://github.com/9r3i" />
<script type="text/javascript" id="virtual.js"></script>
<script type="text/javascript">
/* error message -- for development only */
window.addEventListener('error',function(e){
  let errorText=[
    e.message,
    'URL: ' + e.filename,
    'Line: ' + e.lineno + ', Column: ' + e.colno,
    'Stack: ' + (e.error && e.error.stack || '(no stack trace)')
  ].join('\n');
  alert(errorText);
  console.error(errorText);
});//*/
/* anonymous async function */
(async function(){
  /* clear the storage -- for development only */
  localStorage.clear();//*/
  
  /* exit statement -- for splash screen development only *
  if(true){return;}//*/
  
  /* blog config host file */
  const CONFIG_FILE="https://relfo.vercel.app/9r3i/plain.js/1.2.0/config.json";
  
  /**
   * prepare for registered files
   * note: do not change the keys
   * https://raw.githubusercontent.com/9r3i/gaino.js/master
   */
  const REGISTERED_FILES={
    "gaino.js": "https://raw.githubusercontent.com/9r3i/gaino.js/master/gaino.min.js",
    "router.js": "https://raw.githubusercontent.com/9r3i/router.js/master/router.min.js",
    "parser.js": "https://raw.githubusercontent.com/9r3i/parser.js/master/parser.min.js",
    "blog.js": "https://raw.githubusercontent.com/9r3i/blog.js/master/blog.min.js"
  };
  
  /* virtual host file */
  const VIRTUAL_HOST = "https://raw.githubusercontent.com/9r3i/virtual.js/master/virtual.min.js";
  
  /* gaino config -- do not change from this point */
  const GAINO_CONFIG={
    "load": [
      "router.js",
      "parser.js",
      "blog.js"
    ],
    "start": {
      "class": "blog",
      "method": "init",
      "args": [
        CONFIG_FILE
      ]
    }
  };
  
  /* standard virtual initialization -- do not change */
  let vname='virtual.js',
  vtag=document.getElementById(vname),
  vscript=localStorage.getItem('virtual/'+vname);
  if(!vscript){
    vscript=await fetch(VIRTUAL_HOST).then(r=>r.text());
    if(!vscript.match(/function\svirtual/)){
      alert('Error: Failed to load virtual.js');
      return;
    }
  }
  /* execute the virtual script */
  vtag.textContent=vscript;
  /* initialize virtual.js with registered files */
  const app=new virtual(REGISTERED_FILES);
  /* save virtual script */
  app.put(vname,vscript);
  /* load gaino file */
  await app.load('gaino.js');
  /* start the gaino app */
  new gaino(app,GAINO_CONFIG);
  /* doing silent self update for virtual.js */
  app.files[vname]=VIRTUAL_HOST;
  await app.update(vname);
})();
</script>
<style type="text/css">
body{
  margin:0px;
  padding:0px;
}
.index-splash{
  display:flex;
  align-items:center;
  justify-content:center;
  height:100vh;
  width:100vw;
  margin:0px;
  padding:0px;
  font-family:system-ui;
  background-color:#fff;
  background:linear-gradient(#fff 0%,#bdf 80%,#59d 100%);
}
.index-splash progress{
  font-size:24px;
}
.index-splash span{
  position:absolute;
  margin:-35px 0px 0px;
  font-size:13px;
  color:#777;
  animation:fade 2.3s infinite 0s;
}
@keyframes fade{
  0%{opacity:1;}
  50%{opacity:0.3;}
  100%{opacity:1;}
}
</style>
</head><body>
<div class="index-splash">
<span>Connecting...</span>
<progress max="100"></progress>
</div>
</body></html>
