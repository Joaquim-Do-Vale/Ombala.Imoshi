<div class="b-example-divider"></div>

<div class="d-flex flex-column flex-shrink-0 p-3 bg-primary" style="width: 300px;">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
        <span class="fs-4">Outras Notícias</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <h5>Sabias que... <img src="{{asset('img/Question.png')}}" style="float: right;" width="40"  /></h5>
        </li>
        <li>
            <p>
                <strong>O animal mais venenoso do mundo é o caracol</strong><br>
                <i>Estranho, não é mesmo?</i> Quando de trata de animais venenosos, pensamos em cobras, aranhas, escorpiões... Mas o bicho que tem veneno mais potente do mundo é o <strong>caracol-do-cone</strong> (<i>Conus geographus</i>), que habita a costa Australiana. A boa notícia para nós é que os acidentes são muitos raros.
                <div></div>
                    Neste vídeo, você pode ver o caracol-do-cone caçando:
           {{-- <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="{{asset('media/media-1.mp4')}}" allowfullscreen></iframe>
                </div> --}}
                <video id="filme1" controls="controls" poster="img/caracol.jpg">
                    <source src="{{asset('media/media-1.mp4')}}" type="video/mp4" />
                </video>
                <div></div>
                    <a href="https://www.hipercultura.com/maiores-curiosidades-do-mundo/" target="_blank">Para mais informações acesse o link.</a>
                </p>
            </li>
        </ul>
    </div>
