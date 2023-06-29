<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
          crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
            integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS"
            crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">

        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Купить
                </button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Снять
                </button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                        type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Посуточно
                </button>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent" >
            <div class="tab-pane fade show " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                 tabindex="0" style="display: inline-flex">

                <div>
                    <ul class="nav nav-pills">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-expanded="false">Квартиру</a>
                            <ul class="dropdown-menu">
                                <li><a href="" class="dropdown-item">Квартиру</a></li>
                                <li><a href="" class="dropdown-item">Комнату</a></li>
                                <li><a href="" class="dropdown-item">Дом, дачу</a></li>
                                <li><a href="" class="dropdown-item">Таунхаус</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="nav nav-pills">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-expanded="false">Комнат</a>
                            <ul class="dropdown-menu">
                                <li><a href="" class="dropdown-item">1</a></li>
                                <li><a href="" class="dropdown-item">2</a></li>
                                <li><a href="" class="dropdown-item">3</a></li>
                                <li><a href="" class="dropdown-item">4</a></li>
                                <li><a href="" class="dropdown-item">5</a></li>
                                <li><a href="" class="dropdown-item">6+</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div>

                    <ul class="nav nav-pills">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><input type="text" placeholder="От"  class="form-control form-control-sm" aria-label=".form-control-sm example"></li>
                                <li><input type="text" placeholder="До"  class="form-control form-control-sm" aria-label=".form-control-sm example"></li>
                            </ul>
                        </li>
                    </ul>

                </div>

            </div>
            <div class="tab-pane fade" style="display: inline-flex;" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">

                <div>
                    <ul class="nav nav-pills">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-expanded="false">Квартиру</a>
                            <ul class="dropdown-menu">
                                <li><a href="" class="dropdown-item">Квартиру</a></li>
                                <li><a href="" class="dropdown-item">Комнату</a></li>
                                <li><a href="" class="dropdown-item">Дом, дачу</a></li>
                                <li><a href="" class="dropdown-item">Таунхаус</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="nav nav-pills">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-expanded="false">Комнат</a>
                            <ul class="dropdown-menu">
                                <li><a href="" class="dropdown-item">1</a></li>
                                <li><a href="" class="dropdown-item">2</a></li>
                                <li><a href="" class="dropdown-item">3</a></li>
                                <li><a href="" class="dropdown-item">4</a></li>
                                <li><a href="" class="dropdown-item">5</a></li>
                                <li><a href="" class="dropdown-item">6+</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div>

                    <ul class="nav nav-pills">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><input type="text" placeholder="От"  class="form-control form-control-sm" aria-label=".form-control-sm example"></li>
                                <li><input type="text" placeholder="До"  class="form-control form-control-sm" aria-label=".form-control-sm example"></li>
                            </ul>
                        </li>
                    </ul>

                </div>

            </div>
            <div class="tab-pane fade" style="display: inline-flex;" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">

                <div>
                    <ul class="nav nav-pills">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-expanded="false">Квартиру</a>
                            <ul class="dropdown-menu">
                                <li><a href="" class="dropdown-item">Квартиру</a></li>
                                <li><a href="" class="dropdown-item">Комнату</a></li>
                                <li><a href="" class="dropdown-item">Дом, дачу</a></li>
                                <li><a href="" class="dropdown-item">Таунхаус</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="nav nav-pills">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-expanded="false">Комнат</a>
                            <ul class="dropdown-menu">
                                <li><a href="" class="dropdown-item">1</a></li>
                                <li><a href="" class="dropdown-item">2</a></li>
                                <li><a href="" class="dropdown-item">3</a></li>
                                <li><a href="" class="dropdown-item">4</a></li>
                                <li><a href="" class="dropdown-item">5</a></li>
                                <li><a href="" class="dropdown-item">6+</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div>

                    <ul class="nav nav-pills">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                               aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><input type="text" placeholder="От"  class="form-control form-control-sm" aria-label=".form-control-sm example"></li>
                                <li><input type="text" placeholder="До"  class="form-control form-control-sm" aria-label=".form-control-sm example"></li>
                            </ul>
                        </li>
                    </ul>

                </div>

            </div>
            @can('view', auth()->user())
                <li class="nav-item">
                    <a class="nav-link" href="">Admin</a>
                </li>
            @endcan
        </div>


    </div>
    @yield('content')
</div>
</body>
</html>






