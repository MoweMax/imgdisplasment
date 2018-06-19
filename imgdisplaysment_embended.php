<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr">

<head>
    <title>imgdisplaysment Test</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <script src="/pixi.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webfont/1.6.28/webfontloader.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenLite.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/plugins/CSSPlugin.min.js"></script>
    <style>
        @font-face {
            font-family: 'Monarch';
            src: url('/imgdisp_font/Monarch.eot');
            src: url('/imgdisp_font/Monarch.eot?#iefix') format('embedded-opentype'),
            url('/imgdisp_font/Monarch.woff2') format('woff2'),
            url('/imgdisp_font/Monarch.woff') format('woff'),
            url('/imgdisp_font/Monarch.svg#Monarch') format('svg');
            font-weight: normal;
            font-style: normal;
        }

        .projects__list {
            /* border-bottom-color: rgb(0, 0, 0) ;
        border-bottom-style: none ;
        border-bottom-width: 0px ;
        border-image-outset: 0px ;
        border-image-repeat: stretch ;
        border-image-slice: 100% ;
        border-image-source: none ;
        border-image-width: 1 ;
        border-left-color: rgb(0, 0, 0) ;
        border-left-style: none ;
        border-left-width: 0px ;
        border-right-color: rgb(0, 0, 0) ;
        border-right-style: none ;
        border-right-width: 0px ;
        border-top-color: rgb(0, 0, 0) ;
        border-top-style: none ;
        border-top-width: 0px ;
        color: rgb(0, 0, 0) ;
        display: flex ;
        flex-direction: column ;
        font-size: 112.891px ;
        font-style: normal ;
        font-weight: 300 ;
        height: 868px ;
        line-height: 124.18px ;
        list-style-image: none ;
        list-style-position: outside ;
        list-style-type: none ;

        position: relative ;
        text-align: center ;
        vertical-align: baseline ; */
            margin-bottom: 0px;
            margin-left: 12px;
            /*//MM_STRANGE24px*/
            margin-right: 0px;
            margin-top: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
            padding-right: 0px;
            padding-top: 0px;
            visibility: visible;
            position: relative;
            font-size: 7.9vw;
            line-height: 1.1em;
            display: flex;
            flex-direction: column;
            font-family: sans-serif;
            /* width: 836.281px ; */
        }

        .projects__list--year {
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
            opacity: 0;
            display: inline-block;
        }

        .canvasFx {
            z-index: 5;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .page-body {
            padding: 30vh 3.125vw;
            margin: auto;
        }

        .page-body {
            font-size: 8.9vw;
            line-height: 1.1em;
        }

        canvas {
            width: 100%;
        }

        .mmItem {
            position: relative;
        }

        .mmItem .canvasFX {
            width: 100%;
            height: 100%;
        }

        .mmWrap {
            padding: 10%;
        }

        .mmWrap .projects__list--title {
            font-family: 'Monarch';
            font-size: 180px;
            line-height: 160px;
            text-align: center;
            width: 100%;
            opacity: 1;
        }
    </style>

</head>

<body style="background-color:#333">
    <div class="mmItem">
        <a href="#1">
            <div class="mmWrap">
                <div class="title">
                    <div class="projects__list--title">Studio Muse</div>
                    <div class="projects__list--cover" data-images="/imgdisp_img/sara-marandi-studio-muse-02-2-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-studio-muse-00-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-studio-muse-06-2-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-studio-muse-07-2-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-studio-muse-03-2-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-studio-muse-01-1-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-studio-muse-05-2-1440x0-c-default.jpg">
                    </div>
                </div>
                <div class="desc">
                    Фото из портала подтягивается в карточку. Возможность логироваться на основании социалки и все данные автоматически вносить в карточку и на портал, для внедрения триггера. Триггер с привязкой между эккаунт от социалки битрикса и действием на портале.
                    Lost зашёл на сайт оплатить - регу в задачу Триггер. Lost зашёл на сайт в любой раздел - главе супервайзеров в задачу Триггер Freez на форму оплаты - задача реге Триггер. Current на форму оплаты - задачу регу Триггер. Студент оплатил
                    триггер на письмо с чеком. Студент подходит абонемента к концу, письмо студенту, задача регу. Закончился абонемент, закрытие принудительно доступ к порталу. Пропущенный от студента - сообщение в ленту.
                </div>
            </div>
        </a>
        <div class="canvasFx"></div>
    </div>
    <div class="mmItem">
        <a href="#2">
            <div class="mmWrap">
                <div class="title">
                    <div class="projects__list--title">Flower Power</div>
                    <div class="projects__list--cover" data-images="/imgdisp_img/sara-marandi-flower-power-02-1-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-flower-power-08-1-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-flower-power-09-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-flower-power-06-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-flower-power-07-1-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-flower-power-08-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-flower-power-05-1440x0-c-default.jpg">
                    </div>
                </div>
                <div class="desc">
                    Фото из портала подтягивается в карточку. Возможность логироваться на основании социалки и все данные автоматически вносить в карточку и на портал, для внедрения триггера. Триггер с привязкой между эккаунт от социалки битрикса и действием на портале.
                    Lost зашёл на сайт оплатить - регу в задачу Триггер. Lost зашёл на сайт в любой раздел - главе супервайзеров в задачу Триггер Freez на форму оплаты - задача реге Триггер. Current на форму оплаты - задачу регу Триггер. Студент оплатил
                    триггер на письмо с чеком. Студент подходит абонемента к концу, письмо студенту, задача регу. Закончился абонемент, закрытие принудительно доступ к порталу. Пропущенный от студента - сообщение в ленту.
                </div>
            </div>
        </a>
        <div class="canvasFx"></div>
    </div>
    <div class="mmItem">
        <a href="#3">
            <div class="mmWrap">
                <div class="title">
                    <div class="projects__list--title">Wonderland</div>
                    <div class="projects__list--cover" data-images="/imgdisp_img/sara-marandi-new-wonderland-07-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-new-wonderland-04-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-new-wonderland-02-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-new-wonderland-09-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-new-wonderland-03-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-new-wonderland-01-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-new-wonderland-08-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-new-wonderland-06-1440x0-c-default.jpg">
                    </div>
                </div>
                <div class="desc">
                    Фото из портала подтягивается в карточку. Возможность логироваться на основании социалки и все данные автоматически вносить в карточку и на портал, для внедрения триггера. Триггер с привязкой между эккаунт от социалки битрикса и действием на портале.
                    Lost зашёл на сайт оплатить - регу в задачу Триггер. Lost зашёл на сайт в любой раздел - главе супервайзеров в задачу Триггер Freez на форму оплаты - задача реге Триггер. Current на форму оплаты - задачу регу Триггер. Студент оплатил
                    триггер на письмо с чеком. Студент подходит абонемента к концу, письмо студенту, задача регу. Закончился абонемент, закрытие принудительно доступ к порталу. Пропущенный от студента - сообщение в ленту.
                </div>
            </div>
        </a>
        <div class="canvasFx"></div>
    </div>
    <div class="mmItem">
        <a href="#4">
            <div class="mmWrap">
                <div class="title">
                    <div class="projects__list--title">Wonderland</div>
                    <div class="projects__list--cover" data-images="/imgdisp_img/sara-marandi-new-wonderland-07-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-new-wonderland-04-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-new-wonderland-02-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-new-wonderland-09-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-new-wonderland-03-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-new-wonderland-01-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-new-wonderland-08-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-new-wonderland-06-1440x0-c-default.jpg">
                    </div>
                </div>
                <div class="desc">
                    Фото из портала подтягивается в карточку. Возможность логироваться на основании социалки и все данные автоматически вносить в карточку и на портал, для внедрения триггера. Триггер с привязкой между эккаунт от социалки битрикса и действием на портале.
                    Lost зашёл на сайт оплатить - регу в задачу Триггер. Lost зашёл на сайт в любой раздел - главе супервайзеров в задачу Триггер Freez на форму оплаты - задача реге Триггер. Current на форму оплаты - задачу регу Триггер. Студент оплатил
                    триггер на письмо с чеком. Студент подходит абонемента к концу, письмо студенту, задача регу. Закончился абонемент, закрытие принудительно доступ к порталу. Пропущенный от студента - сообщение в ленту.
                </div>
            </div>
        </a>
        <div class="canvasFx"></div>
    </div>
    <div class="mmItem">
        <a href="#5">
            <div class="mmWrap">
                <div class="title">
                    <div class="projects__list--title">Wonderland</div>
                    <div class="projects__list--cover" data-images="/imgdisp_img/sara-marandi-new-wonderland-07-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-new-wonderland-04-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-new-wonderland-02-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-new-wonderland-09-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-new-wonderland-03-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-new-wonderland-01-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-new-wonderland-08-1440x0-c-default.jpg||/imgdisp_img/sara-marandi-new-wonderland-06-1440x0-c-default.jpg">
                    </div>
                </div>
                <div class="desc">
                    Фото из портала подтягивается в карточку. Возможность логироваться на основании социалки и все данные автоматически вносить в карточку и на портал, для внедрения триггера. Триггер с привязкой между эккаунт от социалки битрикса и действием на портале.
                    Lost зашёл на сайт оплатить - регу в задачу Триггер. Lost зашёл на сайт в любой раздел - главе супервайзеров в задачу Триггер Freez на форму оплаты - задача реге Триггер. Current на форму оплаты - задачу регу Триггер. Студент оплатил
                    триггер на письмо с чеком. Студент подходит абонемента к концу, письмо студенту, задача регу. Закончился абонемент, закрытие принудительно доступ к порталу. Пропущенный от студента - сообщение в ленту.
                </div>
            </div>
        </a>
        <div class="canvasFx"></div>
    </div>
</body>
<script>
    $(document).ready(function() {
        var u = Object();

        u.defaultmobile = u.defaultwidth < 740;
        u.defaultisRetina = !!matchMedia("(-webkit-min-device-pixel-ratio: 2), (min-device-pixel-ratio: 2), (min-resolution: 192dpi)").matches;
        u.defaultisTouch = false;

        u.defaultmouseX = 50;
        u.defaultmouseY = 50;
        u.defaultresize = function() {
            u.defaultmobile = u.defaultwidth < 740;
            u.defaultisRetina = !!matchMedia("(-webkit-min-device-pixel-ratio: 2), (min-device-pixel-ratio: 2), (min-resolution: 192dpi)").matches;
        };
        u.defaultonMouseMove = function(e) {
            if (e.targetTouches) {
                u.defaultmouseX = e.targetTouches[0].clientX;
                u.defaultmouseY = e.targetTouches[0].clientY;
            } else if (e.changedTouches) {
                u.defaultmouseX = e.changedTouches[0].clientX;
                u.defaultmouseY = e.changedTouches[0].clientY;
            } else {
                u.defaultmouseX = e.clientX;
                u.defaultmouseY = e.clientY;
            }
            u.defaultmouseY += window.pageYOffset;
        };

        window._canvasFx = [];
        PIXI.utils.skipHello();
        PIXI.settings.SCALE_MODE = PIXI.SCALE_MODES.LINEAR;
        $('.mmItem').each(function(ind, el) {
            var that = Object();
            window._canvasFx[ind] = that;

            that.defaultheight = $(el).outerHeight();
            that.defaultwidth = $(el).outerWidth();
            that.defaultcenterX = .5 * that.defaultwidth;
            that.defaultcenterY = .5 * that.defaultheight;

            that.wrapper = el;
            that.holder = $(el).children('.canvasFx');
            that.canvas = document.createElement("canvas");
            that.holder.append(that.canvas);
            that.renderer = PIXI.autoDetectRenderer(that.defaultwidth, that.defaultheight, {
                view: that.canvas,
                transparent: 1,
                antialias: 1,
                roundPixels: 1,
                resolution: 1, //u.defaultisRetina ? 2 : 1,
                forceFXAA: 0
            });
            that.renderTexture = PIXI.RenderTexture.create(that.defaultwidth, that.defaultheight);
            that.renderTexture2 = PIXI.RenderTexture.create(that.defaultwidth, that.defaultheight);
            that.currentTexture = that.renderTexture, that.feedback = new PIXI.Sprite(that.currentTexture);
            that.feedback.x = that.defaultcenterX, that.feedback.y = that.defaultcenterY;
            that.feedback.anchor.set(.5), that.stage = new PIXI.Container, that.scene = new PIXI.Container;
            that.noFeedback = new PIXI.Container, that.darkTitles = new PIXI.Sprite;
            that.lightTitles = new PIXI.Sprite, that.visuelHeight = .59 * that.defaultheight;
            that.visuelWidth = 21 * that.visuelHeight / 29.7, that.visuelContainer = new PIXI.Container;
            that.visuelBackground = new PIXI.Sprite;
            var t = new PIXI.Graphics;
            t.beginFill("0x000000", 0);
            t.drawRect(0, 0, 10, 10);
            t.endFill();

            that.visuelBackground.addChild(t);
            that.visuelContainer.addChild(that.visuelBackground);

            that.visuelContainer.alpha = 1;
            that.visuel = new PIXI.Container,
                that.visuelContainer.addChild(that.visuel);
            that.titleMask = new PIXI.Graphics,
                that.titleMask.beginFill("0xff00cc", 1);
            that.titleMask.drawRect(0, 0, that.visuelWidth, that.visuelHeight),
                that.titleMask.endFill();
            that.titleMask.addChild(that.titleMask);
            that.visuelContainer.addChild(that.titleMask),
                that.lightTitles.mask = that.titleMask;
            that.scene.addChild(that.darkTitles),
                that.scene.addChild(that.visuelContainer);
            that.noFeedback.addChild(that.lightTitles),
                that.scene.addChild(that.feedback);
            that.stage.addChild(that.scene),
                that.stage.addChild(that.noFeedback),
                that.distoScale = 1,
                that.scaleComp = 1 / that.distoScale,
                that.visuelContainer.scale.x = that.distoScale;
            that.visuelContainer.scale.y = that.distoScale,
                that.visuel.scale.x = that.scaleComp;
            that.visuel.scale.y = that.scaleComp,

            u.defaultisTouch || (that.displacementTexture = PIXI.Texture.fromImage("/imgdisp_img/nm-04.jpg"),
                that.displacementTexture.baseTexture.wrapMode = 2, that.displacementSprite = new PIXI.Sprite(that.displacementTexture),
                that.displacementSprite.width = that.defaultwidth, that.displacementSprite.height = that.defaultheight,
                that.stage.addChild(that.displacementSprite),
                that.displacementFilter = new PIXI.filters.DisplacementFilter(that.displacementSprite),
                that.visuelContainer.filters = [that.displacementFilter]);

            that.frame = 1;
            that.scrollY = 0;
            that.yScrollNull = 0;
            that.fontSize = .09 * that.defaultwidth;
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

            that.setHome = function(currProjects) {
                that._projects = currProjects

                WebFont.load({
                    active: function() {
                        that.setProjects();
                    },
                    custom: {
                        families: ["Monarch"]
                    }
                });
            }

            that.selectProject = function(hoveredProject) {
                var t = that.projectsList[hoveredProject._id];
                that._currentProject = t;
                that._currentImageId = void 0;
                that._currentProjectOver = hoveredProject;
                that.visuelContainer.x = u.defaultmouseX;
                that.visuelContainer.y = u.defaultmouseY;
                TweenLite.set(t.lightTitle, {
                    alpha: 1
                });

                if (t.lightTitle._yearMc) {
                    TweenLite.set(t.lightTitle._yearMc, {
                        alpha: 1
                    });
                    TweenLite.set(t.darkTitle._yearMc, {
                        alpha: 1
                    });
                }

                TweenLite.to(that.visuelContainer, 0, {
                    alpha: 1,
                    ease: Power2.easeInOut
                });
                TweenLite.to(that, 1.5, {
                    _xDistoNull: 0,
                    ease: Power2.easeOut
                });
                TweenLite.to(that, 1.5, {
                    _yDistoNull: 0,
                    ease: Power2.easeOut
                })
            };
            that.unselectProject = function(hoveredProject) {

                var t = void 0 != hoveredProject._id ? that.projectsList[hoveredProject._id] : hoveredProject;
                TweenLite.set(t.lightTitle, {
                    alpha: 0
                }), t.lightTitle._yearMc && (TweenLite.set(t.lightTitle._yearMc, {
                    alpha: 0
                }), TweenLite.set(t.darkTitle._yearMc, {
                    alpha: 0
                })), that._currentProject = null, that.hideCover()
            };
            that.hideCover = function() {

                that._currentProject || (TweenLite.to(that.visuelContainer, 0, {
                    alpha: 0,
                    ease: Power2.easeInOut
                }), TweenLite.to(that, 0, {
                    _xDistoNull: that.initDistoX,
                    ease: Power2.easeIn
                }), TweenLite.to(that, 0, {
                    _yDistoNull: that.initDistoY,
                    ease: Power2.easeIn
                }))
            }

            var projectOjb = Object();
            projectOjb.projDom = el;
            projectOjb.projects = Array.from(Array.from(projectOjb.projDom.querySelectorAll("a")));
            projectOjb.projects.forEach(function(element, index) {
                var a_link = element; //element.querySelector("a");
                a_link._id = index;
                var title = element.querySelector('.projects__list--title');
                title._id = index;
                title.addEventListener("mouseenter", function(event) {
                    that.selectProject(event.currentTarget);
                });
                title.addEventListener("mouseleave", function(event) {
                    that.unselectProject(event.currentTarget);
                });
                title.addEventListener("click", function(event) {
                    // mm_Some nasty on click event
                });
            });

            that.fontOnResize = function() {
                that.renderer.resize(that.defaultwidth, that.defaultheight);
                (that.displacementSprite.width = that.defaultwidth, that.displacementSprite.height = that.defaultheight);
                var scaledFontSize = .33 * that.fontSize;
                if (that.projectsList) {
                    var overallBoundaries = that.projDom.getBoundingClientRect();
                    that.projectsList.forEach(function(element, index) {
                        var widthOfText = element.darkTitle._titleMc.width;
                        var heightOfText = element.darkTitle._titleMc.height;
                        var text_pos = $(that.projDom.querySelector('.projects__list--title')).offset().top - $(that.holder).offset().top;
                        element.darkTitle.x = that.defaultcenterX - .5 * widthOfText;
                        element.darkTitle.y = text_pos - .12 * heightOfText;
                        element.lightTitle.x = that.defaultcenterX - .5 * widthOfText;
                        element.lightTitle.y = text_pos - .12 * heightOfText;
                    })
                }
            }
            that.setProjects = function() {
                that.projectsList = [];
                that._projects.forEach(function(t, i) {
                    var singleProj = {},
                        pictures = [],
                        r = t.querySelector(".projects__list--cover");
                    r.dataset.images.split("||").forEach(function(e) {
                        var t = document.createElement("img");
                        t.src = e, pictures.push(t)
                    }), singleProj.imageLoop = pictures;
                    var a = t.querySelector(".projects__list--title"),
                        l = t.querySelector(".projects__list--year"),
                        u = createTitle(a, l);
                    singleProj.darkTitle = u.dark;
                    singleProj.lightTitle = u.light;
                    that.darkTitles.addChild(u.dark);
                    that.lightTitles.addChild(u.light);
                    that.projectsList.push(singleProj);
                });
                that.fontOnResize();
            }

            projectOjb.init = function() {
                that.projDom = this.projDom;
                that.scrollY = 0;
                if (!that._projects)
                    that.setHome(this.projects);
                console.log("mm_init", !that._projects);
            };
            Array.from(projectOjb.projDom.querySelectorAll("a")).forEach(function(element) {
                element._href = element.getAttribute("href");
                element.addEventListener("dragstart", function(event) {
                    event.preventDefault();
                })
            });

            projectOjb.init();

            that.update = function() {
                //window._canvasFx[1].canvas.getBoundingClientRect().top // relative to the viewport
                var amplifier = -$(that.canvas).offset().top;
                if (this.scrollable && Math.round(this.scrollable.y) != Math.round(this.scrollY) && this.scroll(this.scrollable.y),
                    TweenLite.to(this, .4, {
                        easedMouseX: u.defaultmouseX,
                        ease: Power1.easeOut
                    }),
                    TweenLite.to(this, .4, {
                        easedMouseY: u.defaultmouseY,
                        ease: Power1.easeOut
                    }),
                    this.displacementFilter.scale.x = 1 + (u.defaultmouseX - this.easedMouseX) * this.distoMouseAmp + this._xDistoNull,
                    this.displacementFilter.scale.y = 1 + (u.defaultmouseY - this.easedMouseY) * this.distoMouseAmp + this._yDistoNull,
                    this._currentProject) {

                    var e = u.defaultmouseX - (this._currentProject.darkTitle.x - 10);
                    e < 0 ? e = 0 : e > this._currentProject.darkTitle.width && (e = this._currentProject.darkTitle.width);
                    var t = Math.floor(e / (0.098 * that.defaultwidth));

                    if (this._currentImageId != t) {
                        this._currentImageId = t;
                        var i = t % (this._currentProject.imageLoop.length - 1),
                            o = this._currentProject.imageLoop[i];
                        o.complete || 0 != i && (o = this._currentProject.imageLoop[0]);
                        var n = PIXI.Sprite.from(o),
                            r = 1;
                        o.height > 0 && (r = o.width / o.height), n.height = .4 * that.defaultheight,
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
                            this._currentImageSprite = n;
                    }
                }
                TweenLite.to(this.visuelContainer, .5, {
                    x: u.defaultmouseX,
                    ease: Power4.easeOut
                }), TweenLite.to(this.visuelContainer, .5, {
                    y: u.defaultmouseY + amplifier,
                    ease: Power4.easeOut
                });

                this.renderer.render(this.stage);
                this.frame++;
            }

            that.destroySprite = function(e) {
                e && (e.parent.removeChild(e), e.destroy(), e = null);
            }

            function createTitle(e, t) {
                console.log("creating title");
                var i = e.innerHTML;
                i = (new DOMParser).parseFromString("<!doctype html><body>" + i, "text/html").body.textContent;
                var o = new PIXI.TextStyle({
                        // fontFamily: "Canela",
                        fontFamily: "Monarch",
                        fontSize: 180,
                        fill: "#008080",
                        align: "center",
                        lineHeight: 160,
                        wordWrap: true,
                        wordWrapWidth: $(that.projDom.querySelector('.projects__list--title')).width() * 0.8,
                        // fill: [
                        //     "#39ff1a",
                        //     "#fe005e"
                        // ],
                        // fillGradientType: 1
                    }),
                    n = new PIXI.TextStyle({
                        // fontFamily: "Canela",
                        fontFamily: "Monarch",
                        fontSize: 180,
                        fill: "#008080",
                        align: "center",
                        lineHeight: 160,
                        wordWrap: true,
                        wordWrapWidth: $(that.projDom.querySelector('.projects__list--title')).width() * 0.8,
                        // fill: "#80ffff"
                        fill: [
                            "#39ff1a",
                            "#fe005e"
                        ],
                        fillGradientType: 1
                    }),
                    r = new PIXI.Container,
                    s = new PIXI.Text(i, o);
                r._style = o;
                r._titleMc = s;
                r.addChild(s);
                var a = new PIXI.Container,
                    l = new PIXI.Text(i, n);
                a._style = n, a._titleMc = l, a.alpha = 0, a.addChild(l)
                return "d" == i.substr(i.length - 1) && (r.decal = !0), {
                    dark: r,
                    light: a
                }
            }
            that.renderer.render(that.stage);
        });

        CSSPlugin.defaultForce3D = true;
        window.addEventListener("mousemove", u.defaultonMouseMove);

        window._canvasFx.forEach(function(entry) {
            var mm_ren = function() {
                entry.update();
                window.requestAnimationFrame(mm_ren);
            }
            window.requestAnimationFrame(mm_ren);
        });
    });
</script>

</html>
