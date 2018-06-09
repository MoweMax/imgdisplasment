<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<head>
  <title>imgdisplaysment Test</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/4.7.1/pixi.min.js"></script>
  <style>
      .projects__list--year {
            display: inline-block;
            position: absolute;
            top: -1.4em;
            right: -1.3em;
            padding: 0 0.1em;
            font-size: 0.34em;
            display: none;
        }
        .projects__list--cover {
    position: relative;
    display: none;
}
.projects__list--title {
    position: relative;
    opacity: 1;
    display: inline-block;
}
.canvasFx {
    z-index: 5;
    position: fixed;
    top: 0;
    left: 0;
    width: 100vw;
    height: 100vh;
    pointer-events: none;
}
  </style>

</head>
<body>

    <div class="page-body" style="background: none; visibility: visible; transform: translate3d(0px, 0px, 0px);background-attachment: scroll ; background-clip: border-box ; background-color: rgba(0, 0, 0, 0) ; background-image: none ; background-origin: padding-box ; background-position-x: 0% ; background-position-y: 0% ; background-repeat-x: ; background-repeat-y: ; background-size: auto ; border-bottom-color: rgb(0, 0, 0) ; border-bottom-style: none ; border-bottom-width: 0px ; border-image-outset: 0px ; border-image-repeat: stretch ; border-image-slice: 100% ; border-image-source: none ; border-image-width: 1 ; border-left-color: rgb(0, 0, 0) ; border-left-style: none ; border-left-width: 0px ; border-right-color: rgb(0, 0, 0) ; border-right-style: none ; border-right-width: 0px ; border-top-color: rgb(0, 0, 0) ; border-top-style: none ; border-top-width: 0px ; color: rgb(0, 0, 0) ; display: block ; font-family: Canela ; font-size: 127.181px ; font-stretch: 100% ; font-style: normal ; font-variant-caps: normal ; font-variant-east-asian: normal ; font-variant-ligatures: normal ; font-variant-numeric: normal ; font-weight: 300 ; height: 868px ; line-height: 139.899px ; margin-bottom: 0px;margin-left:251.703px;margin-right:251.703px;margin-top:0px;padding-bottom:69px;padding-left:44.6562px;padding-right:44.6562px;padding-top:69px;text-align:center;transform:matrix(1, 0, 0, 1, 0, 0);vertical-align:baseline;visibility:visible;width:836.281px;-webkit-font-smoothing:antialiased;">
        <ul class="projects__list" style="border-bottom-color:
rgb(0, 0, 0) ; border-bottom-style: none ; border-bottom-width: 0px ; border-image-outset: 0px ; border-image-repeat: stretch ; border-image-slice: 100% ; border-image-source: none ; border-image-width: 1 ; border-left-color: rgb(0, 0, 0) ; border-left-style: none ; border-left-width: 0px ; border-right-color: rgb(0, 0, 0) ; border-right-style: none ; border-right-width: 0px ; border-top-color: rgb(0, 0, 0) ; border-top-style: none ; border-top-width: 0px ; color: rgb(0, 0, 0) ; display: flex ; flex-direction: column ; font-family: Canela ; font-size: 112.891px ; font-stretch: 100% ; font-style: normal ; font-variant-caps: normal ; font-variant-east-asian: normal ; font-variant-ligatures: normal ; font-variant-numeric: normal ; font-weight: 300 ; height: 868px ; line-height: 124.18px ; list-style-image: none ; list-style-position: outside ; list-style-type: none ; margin-bottom: 0px ; margin-left: 0px ; margin-right: 0px ; margin-top: 0px ; padding-bottom: 0px ; padding-left: 0px ; padding-right: 0px ; padding-top: 0px ; position: relative ; text-align: center ; vertical-align: baseline ; visibility: visible ; width: 836.281px ; -webkit-font-smoothing: antialiased ; -webkit-margin-after: 0px ; -webkit-margin-before: 0px ; -webkit-margin-end: 0px ; -webkit-margin-start: 0px ; -webkit-padding-start: 0px ;"><li>
    <a><div class="projects__list--title">Black Monday</div><div class="projects__list--year">2018</div><div class="projects__list--cover" data-images="http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-blackmonday-03-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-blackmonday-04-2-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-blackmonday-02-1440x0-c-default.jpg">
    <img src="http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-blackmonday-01-1440x0-c-default.jpg"></div><div class="projects__list--gallery"></div>
    </a></li><li>
    <a><div class="projects__list--title">Heart of Darkness</div><div class="projects__list--year">2018</div><div class="projects__list--cover" data-images="http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-heart-darkness-06-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-heart-darkness-05-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-heart-darkness-03-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-heart-darkness-04-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-heart-darkness-07-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-heart-darkness-02-1440x0-c-default.jpg">
    <img src="http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-heart-darkness-01-1440x0-c-default.jpg"></div><div class="projects__list--gallery"></div>
    </a></li><li>
    <a><div class="projects__list--title">Flower Power</div><div class="projects__list--year">2018</div><div class="projects__list--cover" data-images="http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-flower-power-02-1-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-flower-power-08-1-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-flower-power-09-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-flower-power-06-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-flower-power-07-1-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-flower-power-08-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-flower-power-05-1440x0-c-default.jpg">
    <img src="http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-flower-power-03-1440x0-c-default.jpg"></div><div class="projects__list--gallery"></div>
    </a></li><li>
    <a><div class="projects__list--title">Wonderland</div><div class="projects__list--year">2018</div><div class="projects__list--cover" data-images="http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-new-wonderland-07-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-new-wonderland-04-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-new-wonderland-02-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-new-wonderland-09-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-new-wonderland-03-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-new-wonderland-01-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-new-wonderland-08-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-new-wonderland-06-1440x0-c-default.jpg">
    <img src="http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-new-wonderland-05-1440x0-c-default.jpg"></div><div class="projects__list--gallery"></div>
    </a></li><li>
    <a><div class="projects__list--title">Nowwhere</div><div class="projects__list--year">2018</div><div class="projects__list--cover" data-images="http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-rag-bone-08-1-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-rag-bone-00-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-rag-bone-01-1-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-rag-bone-10-1-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-rag-bone-06-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-rag-bone-04-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-rag-bone-05-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-rag-bone-03-1-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-rag-bone-02-1-1440x0-c-default.jpg">
    <img src="http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-rag-bone-07-1-1440x0-c-default.jpg"></div><div class="projects__list--gallery"></div>
    </a></li><li>
    <a><div class="projects__list--title" style="
        color:  blue;
    ">New Romance</div><div class="projects__list--year">2018</div><div class="projects__list--cover" data-images="http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-new-romance-01-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-new-romance-07-1-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-new-romance-03-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-new-romance-05-1-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-new-romance-08-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-new-romance-09-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-new-romance-04-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-new-romance-02-1-1440x0-c-default.jpg">
    <img src="http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-new-romance-06-1-1440x0-c-default.jpg"></div><div class="projects__list--gallery"></div>
    </a></li><li>
    <a><div class="projects__list--title">Studio Muse</div><div class="projects__list--year">2018</div><div class="projects__list--cover" data-images="http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-studio-muse-02-2-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-studio-muse-00-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-studio-muse-06-2-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-studio-muse-07-2-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-studio-muse-03-2-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-studio-muse-01-1-1440x0-c-default.jpg||http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-studio-muse-05-2-1440x0-c-default.jpg">
    <img src="http://www.saramarandi.com/wp-content/uploads/2018/03/sara-marandi-studio-muse-04-2-1440x0-c-default.jpg"></div><div class="projects__list--gallery"></div>
    </a></li></ul></div>


    <div class="canvasFx"></div>

</body>
<script>
  var app = new PIXI.Application(640, 360);
  document.body.appendChild(app.view);
  var circle = new PIXI.Graphics();
  circle.beginFill(0x5cafe2);
  circle.drawCircle(0, 0, 80);
  circle.x = 320;
  circle.y = 180;
  app.stage.addChild(circle);

  var u = Object();

    u.defaultwidth = window.innerWidth;
    u.defaultheight = window.innerHeight;
    u.defaultcenterX = .5 * u.defaultwidth;
    u.defaultcenterY = .5 * u.defaultheight;
    u.defaultmobile = u.defaultwidth < 740;
    u.defaultisRetina = !!matchMedia("(-webkit-min-device-pixel-ratio: 2), (min-device-pixel-ratio: 2), (min-resolution: 192dpi)").matches;
    u.defaultisTouch = false;
    // return function() {
    //     (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(t) || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(t.substr(0, 4))) && (e = !0)
    // }(navigator.userAgent || navigator.vendor || window.opera)

  var that = Object();



  that.holder = document.body.querySelector(".canvasFx");
   that.canvas = document.createElement("canvas");
    that.holder.appendChild(that.canvas);
    PIXI.utils.skipHello();
    PIXI.settings.SCALE_MODE = PIXI.SCALE_MODES.LINEAR;
         that.renderer = PIXI.autoDetectRenderer(u.defaultwidth, u.defaultheight, {
        view: that.canvas,
        transparent: !0,
        antialias: !0,
        roundPixels: !0,
        resolution: u.defaultisRetina ? 2 : 1,
        forceFXAA: !1
    });
    that.renderTexture = PIXI.RenderTexture.create(u.defaultwidth, u.defaultheight);
     that.renderTexture2 = PIXI.RenderTexture.create(u.defaultwidth, u.defaultheight);
      that.currentTexture = that.renderTexture, that.feedback = new PIXI.Sprite(that.currentTexture);
       that.feedback.x = u.defaultcenterX, that.feedback.y = u.defaultcenterY;
        that.feedback.anchor.set(.5), that.stage = new PIXI.Container, that.scene = new PIXI.Container;
         that.noFeedback = new PIXI.Container, that.darkTitles = new PIXI.Sprite;
          that.lightTitles = new PIXI.Sprite, that.visuelHeight = .59 * u.defaultheight;
           that.visuelWidth = 21 * that.visuelHeight / 29.7, that.visuelContainer = new PIXI.Container;
            that.visuelBackground = new PIXI.Sprite;
    var t = new PIXI.Graphics;
    t.beginFill("0x000000", 1);
    t.drawRect(0, 0, 10, 10);
    t.endFill();

    that.visuelBackground.addChild(t);
    that.visuelContainer.addChild(that.visuelBackground);


    that.visuelContainer.alpha = 1; that.visuel = new PIXI.Container,
    that.visuelContainer.addChild(that.visuel); that.titleMask = new PIXI.Graphics,
    that.titleMask.beginFill("0xff00cc", 1); that.titleMask.drawRect(0, 0, that.visuelWidth, that.visuelHeight),
    that.titleMask.endFill(); that.titleMask.addChild(that.titleMask); that.visuelContainer.addChild(that.titleMask),
    that.lightTitles.mask = that.titleMask; that.scene.addChild(that.darkTitles),
    that.scene.addChild(that.visuelContainer); that.noFeedback.addChild(that.lightTitles),
    that.scene.addChild(that.feedback); that.stage.addChild(that.scene),
    that.stage.addChild(that.noFeedback),
    that.distoScale = 1,
    that.scaleComp = 1 / that.distoScale,
    that.visuelContainer.scale.x = that.distoScale; that.visuelContainer.scale.y = that.distoScale,
    that.visuel.scale.x = that.scaleComp; that.visuel.scale.y = that.scaleComp,

    u.defaultisTouch || (that.displacementTexture = PIXI.Texture.fromImage("nm-04.jpg"),
    that.displacementTexture.baseTexture.wrapMode = 2, that.displacementSprite = new PIXI.Sprite(that.displacementTexture),
    that.displacementSprite.width = u.defaultwidth, that.displacementSprite.height = u.defaultheight,
    that.stage.addChild(that.displacementSprite),
    that.displacementFilter = new PIXI.filters.DisplacementFilter(that.displacementSprite),
    that.visuelContainer.filters = [that.displacementFilter]);

    this.hideHome(), this.init()

//init
    that.frame = 1;
    that.scrollY = 0;
that.yScrollNull = 0;
that.fontSize = .09 * u.defaultwidth;
that.easedMouseX = 0;
that.easedMouseY = 0;
that.easedMouseX2 = 0;
that.easedMouseY2 = 0;
that._lastMouseX = 0;
that._lastMouseY = 0;
that._xDistoNull = 0;
that._yDistoNull = 0;
that.initDistoX = 50;
that.initDistoY = -50;
that.distoMouseAmp = 1;
that.imageLoop = [];
that._currentImageSprite = void 0;
that.swapLayers = !1;
that._swapedLayer = "top";
that.timeScale = 1;
that.xDelta = 0;
that.yDelta = 0;
that.scaleDelta = .001;
that.rotDelta = 0;
that.fadeDelta = .05

    that.renderer.render(that.stage);


////

var o = Object();//r(this, (t.__proto__ || Object.getPrototypeOf(t)).apply(this, arguments));
o.projDom = document.body.querySelector(".projects__list");
 o.projects = Array.from(s.querySelectorAll("li"));
  o.projects.forEach(function(e, t) {
    var i = e.querySelector("a");
    i._id = t;
    f.defaultisTouch || (i.addEventListener("mouseenter", o.onRollOver), i.addEventListener("mouseleave", o.onRollOut)), i.addEventListener("click", o.onClick)
});
Array.from(s.querySelectorAll("a")).forEach(function(e) {
    e._href = e.getAttribute("href"), e.removeAttribute("href"), e.addEventListener("dragstart", function(e) {
        e.preventDefault()
    })
});
key: "init",//??
value: function() {
    that.canvasFx = d.default.canvasFx, this.canvasFx.projDom = this.projDom, this.canvasFx.scrollY = 0, d.default.canvasFx._projects || d.default.canvasFx.setHome(this.projects, this._prevPage), this.canvasFx.reset(), this.canvasFx.setScrollable(this)
}
}, {
key: "onRollOver",
value: function(e) {
    this.canvasFx.selectProject(e.currentTarget)
}
}, {
key: "onRollOut",
value: function(e) {
    this.canvasFx.unselectProject(e.currentTarget)
}
}, {
key: "onClick",
value: function(e) {
    // this.canvasFx.activateProject(e.currentTarget)
}
}, {

////





key: "setProjects",
    value: function() {
        var e = this;
        u.default.isTouch || (this.projectsList = [], this._projects.forEach(function(t, i) {
            var o = {},
                n = [],
                r = t.querySelector(".projects__list--cover"),
                s = r.querySelector("img");
            n.push(s), r.dataset.images.split("||").forEach(function(e) {
                var t = document.createElement("img");
                t.src = e, n.push(t)
            }), o.imageLoop = n;
            var a = t.querySelector(".projects__list--title"),
                l = t.querySelector(".projects__list--year"),
                u = e.createTitle(a, l);
            o.darkTitle = u.dark;
            o.lightTitle = u.light;
            e.darkTitles.addChild(u.dark);
            e.lightTitles.addChild(u.light);
            e.projectsList.push(o);
        }), this.resize())
    }
}, {
    key: "createTitle",
    value: function(e, t) {
        var i = e.innerHTML;
        i = (new DOMParser).parseFromString("<!doctype html><body>" + i, "text/html").body.textContent;
        var o = new PIXI.TextStyle({
            fontFamily: "Canela",
            fontSize: 105,
            fill: "#ff0000"
        }),
        n = new PIXI.TextStyle({
            fontFamily: "Canela",
            fontSize: 105,
            fill: "#00ffff"
        }),
        r = new PIXI.Container,
        s = new PIXI.Text(i, o);
        r._style = o;
        r._titleMc = s;
        r.addChild(s);
        var a = new PIXI.Container,
            l = new PIXI.Text(i, n);
        if (a._style = n, a._titleMc = l, a.alpha = 0, a.addChild(l), t) {
            var u = new PIXI.TextStyle({
                    fontFamily: "Canela",
                    fontSize: 33,
                    fill: "#000000"
                }),
                c = new PIXI.TextStyle({
                    fontFamily: "Canela",
                    fontSize: 33,
                    fill: "#ffffff"
                }),
                h = new PIXI.Text(t.innerHTML, u);
                r.addChild(h);
                r._yearMc = h;
                r._yearMc.alpha = 0;
                r._yearMc._style = u;
                var d = new PIXI.Text(t.innerHTML, c);
                a.addChild(d);
                a._yearMc = d;
                a._yearMc.alpha = 0;
                a._yearMc._style = c;
        }
        return "d" == i.substr(i.length - 1) && (r.decal = !0), {
            dark: r,
                light: a
            }
    }






/*




  s = function() {
      function e() {
          n(this, e),
           window._canvasFx = this,
            this.holder = document.body.querySelector(".canvasFx"),
             this.canvas = document.createElement("canvas"),
              this.holder.appendChild(this.canvas),
              PIXI.utils.skipHello(),
              PIXI.settings.SCALE_MODE = PIXI.SCALE_MODES.LINEAR,
                   this.renderer = PIXI.autoDetectRenderer(u.default.width, u.default.height, {
                  view: this.canvas,
                  transparent: !0,
                  antialias: !0,
                  roundPixels: !0,
                  resolution: u.default.isRetina ? 2 : 1,
                  forceFXAA: !1
              }),
              this.renderTexture = PIXI.RenderTexture.create(u.default.width, u.default.height),
               this.renderTexture2 = PIXI.RenderTexture.create(u.default.width, u.default.height),
                this.currentTexture = this.renderTexture, this.feedback = new PIXI.Sprite(this.currentTexture),
                 this.feedback.x = u.default.centerX, this.feedback.y = u.default.centerY,
                  this.feedback.anchor.set(.5), this.stage = new PIXI.Container, this.scene = new PIXI.Container,
                   this.noFeedback = new PIXI.Container, this.darkTitles = new PIXI.Sprite,
                    this.lightTitles = new PIXI.Sprite, this.visuelHeight = .59 * u.default.height,
                     this.visuelWidth = 21 * this.visuelHeight / 29.7, this.visuelContainer = new PIXI.Container,
                      this.visuelBackground = new PIXI.Sprite;
          var t = new PIXI.Graphics;
          t.beginFill("0x000000", 1),
           t.drawRect(0, 0, 10, 10),
            t.endFill(),
           this.visuelBackground.addChild(t), this.visuelContainer.addChild(this.visuelBackground),
            this.visuelContainer.alpha = 0, this.visuel = new PIXI.Container,
             this.visuelContainer.addChild(this.visuel), this.titleMask = new PIXI.Graphics,
              this.titleMask.beginFill("0xff00cc", 1), this.titleMask.drawRect(0, 0, this.visuelWidth, this.visuelHeight),
               this.titleMask.endFill(), this.titleMask.addChild(this.titleMask), this.visuelContainer.addChild(this.titleMask),
                this.lightTitles.mask = this.titleMask, this.scene.addChild(this.darkTitles),
                 this.scene.addChild(this.visuelContainer), this.noFeedback.addChild(this.lightTitles),
                  this.scene.addChild(this.feedback), this.stage.addChild(this.scene),
                   this.stage.addChild(this.noFeedback),
                    this.distoScale = 1,
                    this.scaleComp = 1 / this.distoScale,
                     this.visuelContainer.scale.x = this.distoScale, this.visuelContainer.scale.y = this.distoScale,
                      this.visuel.scale.x = this.scaleComp, this.visuel.scale.y = this.scaleComp,
                       u.default.isTouch || (this.displacementTexture = PIXI.Texture.fromImage(templateUrl + "/library/media/test/nm-04.jpg"),
                        this.displacementTexture.baseTexture.wrapMode = 2, this.displacementSprite = new PIXI.Sprite(this.displacementTexture),
                         this.displacementSprite.width = u.default.width, this.displacementSprite.height = u.default.height,
                          this.stage.addChild(this.displacementSprite),
                           this.displacementFilter = new PIXI.filters.DisplacementFilter(this.displacementSprite),
                            this.visuelContainer.filters = [this.displacementFilter]), this.hideHome(), this.init()
      }
      return a(e, [{
          key: "init",
          value: function() {
              this.frame = 1, this.scrollY = 0, this.yScrollNull = 0, this.fontSize = .09 * u.default.width, this.easedMouseX = 0, this.easedMouseY = 0, this.easedMouseX2 = 0, this.easedMouseY2 = 0, this._lastMouseX = 0, this._lastMouseY = 0, this._xDistoNull = 0, this._yDistoNull = 0, this.initDistoX = 50, this.initDistoY = -50, this.distoMouseAmp = 1, this.imageLoop = [], this._currentImageSprite = void 0, this.swapLayers = !1, this._swapedLayer = "top", this.timeScale = 1, this.xDelta = 0, this.yDelta = 0, this.scaleDelta = .001, this.rotDelta = 0, this.fadeDelta = .05
          }
      }, {
          key: "setHome",
          value: function(e, t) {
              if (this._projects = e, t) this.setProjects();
              else {
                  var i = this;
                  window.onload = function() {
                      WebFont.load({
                          active: function() {
                              i.setProjects()
                          },
                          custom: {
                              families: ["Canela"]
                          }
                      })
                  }
              }
          }
      }, {
          key: "showHome",
          value: function() {
              this.scene.alpha = 1, this.noFeedback.alpha = 1
          }
      }, {
          key: "hideHome",
          value: function() {
              this.scene.alpha = 0, this.noFeedback.alpha = 0
          }
      }, {
          key: "update",
          value: function() {
              if (!u.default.isTouch) {
                  if (this.scrollable && Math.round(this.scrollable.y) != Math.round(this.scrollY) && this.scroll(this.scrollable.y), TweenLite.to(this, .4, {
                          easedMouseX: u.default.mouseX,
                          ease: Power1.easeOut
                      }), TweenLite.to(this, .4, {
                          easedMouseY: u.default.mouseY,
                          ease: Power1.easeOut
                      }), TweenLite.to(this, 1, {
                          easedMouseX2: this.easedMouseX,
                          ease: Power4.easeOut
                      }), TweenLite.to(this, 1, {
                          easedMouseY2: this.easedMouseY,
                          ease: Power4.easeOut
                      }), this.displacementFilter.scale.x = 1 + (u.default.mouseX - this.easedMouseX) * this.distoMouseAmp + this._xDistoNull,
                       this.displacementFilter.scale.y = 1 + (u.default.mouseY - this.easedMouseY) * this.distoMouseAmp + this._yDistoNull,
                       this._currentProject) {
                      var e = u.default.mouseX - (this._currentProject.darkTitle.x - 10);
                      e < 0 ? e = 0 : e > this._currentProject.darkTitle.width && (e = this._currentProject.darkTitle.width);
                      var t = Math.floor(e / (.098 * u.default.width));
                      if (this._currentImageId != t) {
                          this._currentImageId = t;
                          var i = t % (this._currentProject.imageLoop.length - 1),
                              o = this._currentProject.imageLoop[i];
                          o.complete || 0 != i && (o = this._currentProject.imageLoop[0]);
                          var n = PIXI.Sprite.from(o),
                              r = 1;
                          o.height > 0 && (r = o.width / o.height), n.height = .59 * u.default.height,
                           n.width = n.height * r, this.visuelWidth = n.width, this.visuelHeight = n.height,
                            this.visuelBackground.width = .1 * this.visuelWidth,
                             this.visuelBackground.height = .1 * this.visuelHeight,
                              this.visuelBackground.x = .5 * -this.visuelWidth,
                              this.visuelBackground.y = .5 * -this.visuelHeight,
                               this.titleMask.width = this.visuelWidth * this.scaleComp,
                                this.titleMask.height = this.visuelHeight * this.scaleComp,
                                 this.titleMask.x = .5 * -this.visuelWidth * this.scaleComp,
                                  this.titleMask.y = .5 * -this.visuelHeight * this.scaleComp,
                                  this.visuel.addChild(n), this.visuel.x = .5 * -this.visuelWidth * this.scaleComp,
                                   this.visuel.y = .5 * -this.visuelHeight * this.scaleComp,
                                    this._currentImageSprite && this.destroySprite(this._currentImageSprite),
                                     this._currentImageSprite = n
                      }
                      var s = u.default.mouseX,
                          a = u.default.mouseY;
                      TweenLite.to(this.visuelContainer, .5, {
                          x: s,
                          ease: Power4.easeOut
                      }), TweenLite.to(this.visuelContainer, .5, {
                          y: a,
                          ease: Power4.easeOut
                      })
                  }
                  this.renderer.render(this.stage), this.frame++
              }
          }
      }, {
          key: "checkMouseOver",
          value: function(e) {
              var t = e.rect.x,
                  i = e.rect.y - (this.scrollY - this.yScrollNull);
              u.default.mouseX > t && u.default.mouseX < t + e.rect.width && u.default.mouseY > i && u.default.mouseY < i + e.rect.height && e != this._currentProjectOver && (void 0 != this._currentProjectOver && (this.unselectProject(this._currentProjectOver), console.log("out", this._currentProjectOver)), this.selectProject(e), console.log("over", e._id))
          }
      }, {
          key: "destroy",
          value: function() {
              console.log("CanvasFx destroy()")
          }
      }, {
          key: "setScrollable",
          value: function(e) {
              this.scrollable = e.scrollable
          }
      }, {
          key: "scroll",
          value: function(e) {
              this.scrollY = e, this.updateScroll()
          }
      }, {
          key: "updateScroll",
          value: function() {
              this.darkTitles.y = -(this.scrollY - this.yScrollNull), this.lightTitles.y = -(this.scrollY - this.yScrollNull)
          }
      }, {
          key: "destroySprite",
          value: function(e) {
              e && (e.parent.removeChild(e), e.destroy(), e = null)
          }
      }, {
          key: "reset",
          value: function() {
              this.activeProject && (this.lockProject = !1, this.unselectProject(this.activeProject), this.activeProject = void 0)
          }
      }, {
          key: "activateProject",
          value: function(e) {
              void 0 == this._currentProject && this.projectsList && (this._currentProject = this.projectsList[e._id]), this.activeProject = this._currentProject, this.lockProject = !0
          }
      }, {
          key: "selectProject",
          value: function(e) {
              if (!this.lockProject) {
                  var t = this.projectsList[e._id];
                  this._currentProject = t, this._currentImageId = void 0, this._currentProjectOver = e, this.visuelContainer.x = u.default.mouseX, this.visuelContainer.y = u.default.mouseY, TweenLite.set(t.lightTitle, {
                      alpha: 1
                  }), t.lightTitle._yearMc && (TweenLite.set(t.lightTitle._yearMc, {
                      alpha: 1
                  }), TweenLite.set(t.darkTitle._yearMc, {
                      alpha: 1
                  })), TweenLite.to(this.visuelContainer, 0, {
                      alpha: 1,
                      ease: Power2.easeInOut
                  }), TweenLite.to(this, 1.5, {
                      _xDistoNull: 0,
                      ease: Power2.easeOut
                  }), TweenLite.to(this, 1.5, {
                      _yDistoNull: 0,
                      ease: Power2.easeOut
                  })
              }
          }
      }, {
          key: "unselectProject",
          value: function(e) {
              if (!this.lockProject) {
                  var t = void 0 != e._id ? this.projectsList[e._id] : e;
                  TweenLite.set(t.lightTitle, {
                      alpha: 0
                  }), t.lightTitle._yearMc && (TweenLite.set(t.lightTitle._yearMc, {
                      alpha: 0
                  }), TweenLite.set(t.darkTitle._yearMc, {
                      alpha: 0
                  })), this._currentProject = null, setTimeout(this.hideCover, 60)
              }
          }
      }, {
          key: "hideCover",
          value: function() {
              this._currentProject || (TweenLite.to(this.visuelContainer, 0, {
                  alpha: 0,
                  ease: Power2.easeInOut
              }), TweenLite.to(this, 0, {
                  _xDistoNull: this.initDistoX,
                  ease: Power2.easeIn
              }), TweenLite.to(this, 0, {
                  _yDistoNull: this.initDistoY,
                  ease: Power2.easeIn
              }))
          }
      }, {
          key: "setProjects",
          value: function() {
              var e = this;
              u.default.isTouch || (this.projectsList = [], this._projects.forEach(function(t, i) {
                  var o = {},
                      n = [],
                      r = t.querySelector(".projects__list--cover"),
                      s = r.querySelector("img");
                  n.push(s), r.dataset.images.split("||").forEach(function(e) {
                      var t = document.createElement("img");
                      t.src = e, n.push(t)
                  }), o.imageLoop = n;
                  var a = t.querySelector(".projects__list--title"),
                      l = t.querySelector(".projects__list--year"),
                      u = e.createTitle(a, l);
                  o.darkTitle = u.dark, o.lightTitle = u.light, e.darkTitles.addChild(u.dark), e.lightTitles.addChild(u.light), e.projectsList.push(o)
              }), this.resize())
          }
      }, {
          key: "createTitle",
          value: function(e, t) {
              var i = e.innerHTML;
              i = (new DOMParser).parseFromString("<!doctype html><body>" + i, "text/html").body.textContent;
              var o = new PIXI.TextStyle({
                      fontFamily: "Canela",
                      fontSize: 105,
                      fill: "#000000"
                  }),
                  n = new PIXI.TextStyle({
                      fontFamily: "Canela",
                      fontSize: 105,
                      fill: "#ffffff"
                  }),
                  r = new PIXI.Container,
                  s = new PIXI.Text(i, o);
              r._style = o, r._titleMc = s, r.addChild(s);
              var a = new PIXI.Container,
                  l = new PIXI.Text(i, n);
              if (a._style = n, a._titleMc = l, a.alpha = 0, a.addChild(l), t) {
                  var u = new PIXI.TextStyle({
                          fontFamily: "Canela",
                          fontSize: 33,
                          fill: "#000000"
                      }),
                      c = new PIXI.TextStyle({
                          fontFamily: "Canela",
                          fontSize: 33,
                          fill: "#ffffff"
                      }),
                      h = new PIXI.Text(t.innerHTML, u);
                  r.addChild(h), r._yearMc = h, r._yearMc.alpha = 0, r._yearMc._style = u;
                  var d = new PIXI.Text(t.innerHTML, c);
                  a.addChild(d), a._yearMc = d, a._yearMc.alpha = 0, a._yearMc._style = c
              }
              return "d" == i.substr(i.length - 1) && (r.decal = !0), {
                  dark: r,
                  light: a
              }
          }
      }, {
          key: "resize",
          value: function() {
              var e = this;
              this.renderer.resize(u.default.width, u.default.height), u.default.isTouch || (this.displacementSprite.width = u.default.width, this.displacementSprite.height = u.default.height), this.fontSize = .079 * u.default.width;
              var t = .33 * this.fontSize;
              if (this.projectsList) {
                  var i = this.projDom.getBoundingClientRect();
                  this.projectsList.forEach(function(o, n) {
                      o.darkTitle._style.fontSize = e.fontSize, o.lightTitle._style.fontSize = e.fontSize;
                      var r = o.darkTitle._titleMc.width;
                      o.darkTitle.x = u.default.centerX - .5 * r, o.darkTitle.y = i.top + n * e.fontSize * 1.1 - .15 * e.fontSize - (e.yScrollNull - e.scrollY), o.lightTitle.x = u.default.centerX - .5 * r, o.lightTitle.y = i.top + n * e.fontSize * 1.1 - .15 * e.fontSize - (e.yScrollNull - e.scrollY), o.darkTitle._yearMc && (o.darkTitle._yearMc._style.fontSize = t, o.lightTitle._yearMc._style.fontSize = t, o.darkTitle._yearMc.x = r - .18 * e.fontSize, o.lightTitle._yearMc.x = o.darkTitle._yearMc.x, o.darkTitle.decal && (o.darkTitle._yearMc.x = r + .01 * e.fontSize, o.lightTitle._yearMc.x = o.darkTitle._yearMc.x), o.darkTitle._yearMc.y = -.15 * n * e.fontSize * .031, o.lightTitle._yearMc.y = -.15 * n * e.fontSize * .031)
                  })
              }
          }
      }]), e
  }





  */
</script>
</html>
