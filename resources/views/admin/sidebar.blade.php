
    <div id="sidebar-wrapper">

        <ul class="sidebar-nav">
            <li class="sidebar-brand">
              <p>E-A-S-Y \ ADMIN</p>
            </li>
            <hr/>
            <li>
                <a href="{{ route('adminAddNew') }}">Добавить Объект</a>
            </li>
            <li>
                <a href="{{ route('adminAddSpec') }}">Добавить Специалиста</a>
            </li>
            <hr/>
            <li>
                <a href="{{route('adminCats')}}">Категории</a>
            </li>
            <li>
                <a href="{{route('adminObjects')}}">Объекты</a>
            </li>
            <li>
                <a href="{{route('adminSpecialists')}}">Специалисты</a>
            </li>
            <hr/>
        </ul>
    </div>
    <!-- Menu Toggle Script -->
    <script>
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>