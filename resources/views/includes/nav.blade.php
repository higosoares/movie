@inject('categorys', 'App\Models\Category')
@auth
    <nav class="navbar navbar-expand-md navbar-menu mb-5 p-0">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Categories</a>
                            <div class="dropdown-menu">
                                @foreach($categorys->get() as $category)
                                    <a class="dropdown-item" href="/category/{{ $category->id_category }}">{{ $category->tx_name_category }}</a>
                                @endforeach
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
@endauth



