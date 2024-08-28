<!-- Подключение шаблонизатора -->
@extends("layouts.app")

<!-- Динамическое название страницы -->
@section("title")
    Car Rent | RentoCar
@endsection

<!-- Подключние секции -->
@section("main")
    <!-- Блок Hero -->
    <div class="hero-shadow">
        <div class="hero">
            <h1>On Wheels to New Adventures!</h1>
            <a href="">Take a car</a>
        </div>
    </div>

    <!-- Блок вывода машин -->
    <div class="cars">
        <h1>All cars</h1>
        
        <div class="container">
            @foreach ($cars as $el)
            <div class="block"> 
                <img src="{{ asset('cover_images/' . $el->photo) }}" alt="{{ $el->name }}">
                <p class="car-name">{{ $el->name }}</p>
                <p>from <b>{{ $el->price }}</b>/day </p>

                <div class="description">
                    <div class="characteristic">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 34.952 34.952" style="enable-background:new 0 0 34.952 34.952;" xml:space="preserve"><path d="M24.333,23.109H12.902c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h11.431c0.276,0,0.5,0.224,0.5,0.5S24.609,23.109,24.333,23.109z"/><path d="M10.183,25.829c-1.776,0-3.221-1.444-3.221-3.221s1.444-3.221,3.221-3.221c1.775,0,3.22,1.444,3.22,3.221 S11.958,25.829,10.183,25.829z M10.183,20.388c-1.225,0-2.221,0.996-2.221,2.221s0.996,2.221,2.221,2.221c1.224,0,2.22-0.996,2.22-2.221S11.406,20.388,10.183,20.388z"/> <path d="M27.054,25.829c-1.776,0-3.221-1.444-3.221-3.221s1.444-3.221,3.221-3.221s3.221,1.444,3.221,3.221S28.83,25.829,27.054,25.829z M27.054,20.388c-1.225,0-2.221,0.996-2.221,2.221s0.996,2.221,2.221,2.221s2.221-0.996,2.221-2.221S28.278,20.388,27.054,20.388z"/><path d="M24.337,23.109H12.904c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h11.433c0.276,0,0.5,0.224,0.5,0.5S24.613,23.109,24.337,23.109z"/><path d="M32.175,23.109h-2.403c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h2.403c0.619,0,1.138-0.444,1.233-1.056l0.533-3.413c0.037-0.239-0.022-0.477-0.169-0.67c-0.146-0.192-0.357-0.314-0.598-0.344l-6.661-0.812c-0.096-0.012-0.187-0.051-0.261-0.113l-6.021-5.061c-0.397-0.334-0.902-0.518-1.422-0.518H9.39c-0.465,0-0.892,0.234-1.143,0.626l-2.815,4.405c-0.063,0.101-0.162,0.175-0.276,0.209l-3.4,1.025c-0.505,0.152-0.823,0.659-0.742,1.181l0.476,3.049c0.135,0.863,0.867,1.49,1.741,1.49h4.229c0.276,0,0.5,0.224,0.5,0.5s-0.224,0.5-0.5,0.5H3.229c-1.37,0-2.519-0.982-2.729-2.336l-0.476-3.049c-0.157-1.012,0.462-1.997,1.441-2.292l3.224-0.972l2.716-4.25C7.84,9.529,8.582,9.123,9.39,9.123h9.421c0.754,0,1.487,0.267,2.064,0.752l5.907,4.965l6.514,0.794c0.512,0.063,0.964,0.322,1.274,0.733c0.311,0.41,0.438,0.917,0.359,1.427l-0.533,3.413C34.225,22.309,33.29,23.109,32.175,23.109z"/><path d="M21.16,16.204H9.692c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5H21.16c0.276,0,0.5,0.224,0.5,0.5S21.436,16.204,21.16,16.204z"/></svg>
                        <span>{{ $el->car_year }}<span>
                    </div>
                    <div class="characteristic">
                        <svg data-name="Livello 1" id="Livello_1" viewBox="0 0 128 128" xmlns="http://www.w3.org/2000/svg"><title/><path d="M64,39A25,25,0,1,0,89,64,25,25,0,0,0,64,39Zm0,44A19,19,0,1,1,83,64,19,19,0,0,1,64,83Z"/><path d="M121,48h-8.93a1,1,0,0,1-.94-.68,49.9,49.9,0,0,0-2-4.85,1,1,0,0,1,.18-1.15L115.62,35a7,7,0,0,0,0-9.9L102.89,12.38a7,7,0,0,0-9.9,0l-6.31,6.31a1,1,0,0,1-1.15.18,49.76,49.76,0,0,0-4.85-2,1,1,0,0,1-.68-.94V7a7,7,0,0,0-7-7H55a7,7,0,0,0-7,7v8.93a1,1,0,0,1-.68.94,49.9,49.9,0,0,0-4.85,2,1,1,0,0,1-1.15-.18L35,12.38a7,7,0,0,0-9.9,0L12.38,25.11a7,7,0,0,0,0,9.9l6.31,6.31a1,1,0,0,1,.18,1.15,49.76,49.76,0,0,0-2,4.85,1,1,0,0,1-.94.68H7a7,7,0,0,0-7,7V73a7,7,0,0,0,7,7h8.93a1,1,0,0,1,.94.68,49.9,49.9,0,0,0,2,4.85,1,1,0,0,1-.18,1.15L12.38,93a7,7,0,0,0,0,9.9l12.73,12.73a7,7,0,0,0,9.9,0l6.31-6.31a1,1,0,0,1,1.15-.18,49.76,49.76,0,0,0,4.85,2,1,1,0,0,1,.68.94V121a7,7,0,0,0,7,7H73a7,7,0,0,0,7-7v-8.93a1,1,0,0,1,.68-.94,49.9,49.9,0,0,0,4.85-2,1,1,0,0,1,1.15.18L93,115.62a7,7,0,0,0,9.9,0l12.73-12.73a7,7,0,0,0,0-9.9l-6.31-6.31a1,1,0,0,1-.18-1.15,49.76,49.76,0,0,0,2-4.85,1,1,0,0,1,.94-.68H121a7,7,0,0,0,7-7V55A7,7,0,0,0,121,48Zm1,25a1,1,0,0,1-1,1h-8.93a7,7,0,0,0-6.6,4.69,43.9,43.9,0,0,1-1.76,4.26,7,7,0,0,0,1.35,8l6.31,6.31a1,1,0,0,1,0,1.41L98.65,111.38a1,1,0,0,1-1.41,0l-6.31-6.31a7,7,0,0,0-8-1.35,43.88,43.88,0,0,1-4.27,1.76,7,7,0,0,0-4.68,6.6V121a1,1,0,0,1-1,1H55a1,1,0,0,1-1-1v-8.93a7,7,0,0,0-4.69-6.6,43.9,43.9,0,0,1-4.26-1.76,7,7,0,0,0-8,1.35l-6.31,6.31a1,1,0,0,1-1.41,0L16.62,98.65a1,1,0,0,1,0-1.41l6.31-6.31a7,7,0,0,0,1.35-8,43.88,43.88,0,0,1-1.76-4.27A7,7,0,0,0,15.93,74H7a1,1,0,0,1-1-1V55a1,1,0,0,1,1-1h8.93a7,7,0,0,0,6.6-4.69,43.9,43.9,0,0,1,1.76-4.26,7,7,0,0,0-1.35-8l-6.31-6.31a1,1,0,0,1,0-1.41L29.35,16.62a1,1,0,0,1,1.41,0l6.31,6.31a7,7,0,0,0,8,1.35,43.88,43.88,0,0,1,4.27-1.76A7,7,0,0,0,54,15.93V7a1,1,0,0,1,1-1H73a1,1,0,0,1,1,1v8.93a7,7,0,0,0,4.69,6.6,43.9,43.9,0,0,1,4.26,1.76,7,7,0,0,0,8-1.35l6.31-6.31a1,1,0,0,1,1.41,0l12.73,12.73a1,1,0,0,1,0,1.41l-6.31,6.31a7,7,0,0,0-1.35,8,43.88,43.88,0,0,1,1.76,4.27,7,7,0,0,0,6.6,4.68H121a1,1,0,0,1,1,1Z"/></svg>
                        <span>{{ $el->car_gearbox }}</span>
                    </div>
                </div>

                <a href="">Rent</a>
            </div>
            @endforeach
        </div>
    </div>
@endsection