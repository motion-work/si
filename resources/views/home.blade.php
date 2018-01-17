@extends('layouts.app')

@section('content')
    @include('includes.hero')

    <div class="ui fluid container">

        <div id="evalinklive" class="feature xs-mb-50 wow fadeIn">
            <div class="ui container">
                <div class="ui centered stackable grid">
                    <div class="row">
                        <div class="ten wide column center aligned header">
                            <h1>Evalink Live</h1>

                            <h3>Stell dir vor du könntest dein Zuhause, dein Geschäft und deine Ferienhäuser ganz
                                einfach alles über eine App überwachen lassen.</h3>

                            <a href="https://www.alarmaufschaltung.ch/">Mehr erfahren</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ten wide column">
                            <div class="ui embed" data-source="youtube" data-id="MLePX6Bq5fY"
                                 data-placeholder="/images/image-16by9.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="feature1" class="feature bg-light-blue">
            <div class="ui container">
                <div class="ui stackable two column grid">
                    <div class="column wow slideInLeft">
                        <h2>Einzigartige Online Plattform</h2>

                        <h3>Verwalten Sie Ihr Haus und Geschäft ganz bequem über die Online Plattform.</h3>

                        <a href="https://www.alarmaufschaltung.ch/">Mehr erfahren</a>
                    </div>
                    <div class="column wow slideInRight">
                        <img src="/img/desktop.svg" class="ui centered small image" alt="Image">
                    </div>
                </div>
            </div>
        </div>

        <div id="feature2" class="feature">
            <div class="ui container">
                <div class="ui stackable two column grid">
                    <div class="column wow slideInLeft">
                        <img src="/img/lock.svg" class="ui centered small image" alt="Image">
                    </div>
                    <div class="column wow slideInRight">
                        <h2>Sichere Alarmübertragung für Pflichtanlagen</h2>

                        <h3>Egal ob Sie Ihre bestehende Brandmeldeanlage von Analog auf IP-Technologie modernisieren
                            oder Ihre Alarmübertragungskosten optimieren wollen. Mit Hilfe von Evalink Live ist dies
                            kein Problem.</h3>

                        <a href="https://www.alarmaufschaltung.ch/">Mehr erfahren</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="feature3" class="feature bg-light-blue">
            <div class="ui container">
                <div class="ui stackable two column grid">
                    <div class="column wow slideInLeft">
                        <h2>Alarmübertragung zu privaten Leitstellen</h2>

                        <h3>Für die Alarmübertagung zu privaten Leitstellen bieten wir Ihnen die passenden Service
                            Angebote für Ihre Bedürfnisse. Wählen Sie selbst, ob Sie Interventionsdienst benötigen oder
                            nicht.</h3>

                        <a href="https://www.alarmaufschaltung.ch/einbruch-brandalarm">Mehr erfahren</a>
                    </div>
                    <div class="column wow slideInRight">
                        <img src="/img/house.svg" class="ui centered small image" alt="Image">
                    </div>
                </div>
            </div>
        </div>

        <div id="feature4" class="feature">
            <div class="ui container">
                <div class="ui stackable two column grid">
                    <div class="column wow slideInLeft">
                        <img src="/img/arm.svg" class="ui centered small image" alt="Image">
                    </div>
                    <div class="column wow slideInRight">
                        <h2>Sicherheit durch Selbstüberwachung</h2>

                        <h3>Dank unserem Selbstüberwachungsservice werden Sie bei einem Alarm in Echtzeit via E-Mail
                            oder
                            SMS benachrichtigt.</h3>

                        <a href="https://www.alarmaufschaltung.ch/selbstueberwachung">Mehr erfahren</a>
                    </div>
                </div>
            </div>
        </div>

        <div id="register" class="feature bg-dark-blue">
            <div class="ui container">
                <div class="ui center aligned grid">
                    <div class="column wow bounceIn">
                        <img src="/img/target.svg" class="ui centered small image" alt="Image">

                        <h2 class="c-white ui centered">Registriere dich jetzt!</h2>

                        <a href="https://eva-ch01-live-02.tech.sitasys.com/#/">
                            <div class="massive ui green button">Anmelden</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div id="mysecuritycenter" class="feature wow fadeIn">
            <div class="ui container">
                <div class="ui centered stackable grid">
                    <div class="row">
                        <div class="ten wide column center aligned header">
                            <h1>My Security Center App</h1>

                            <p>Coming soon</p>

                            <h3>Mit der My Security Center App verwaltest du alles bequem von deinem Smartphone
                                aus. Alarme verfizieren, Abonnement verwalten, Massnahmepläne erstellen,
                                Interventionsteam alarmieren etc.
                                Egal wo du gerade bist.</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="five wide column right aligned">
                            <a href="https://itunes.apple.com/us/app/sitasys-security/id1308359270?mt=8"><img
                                        src="/img/app-store-badge.png" alt="App Store"
                                        class="ui small image"></a>
                        </div>
                        <div class="five wide column">
                            <a href="https://play.google.com/store/apps/details?id=com.sitasys.mysecuritycenter"><img
                                        src="/img/google-play-badge.png" alt="Google Play Store"
                                        class="ui small image"></a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="ten wide column">
                            <img class="ui centered medium image" src="/img/mysecuritycenter.jpg"
                                 alt="My Security Center">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
