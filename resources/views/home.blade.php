@extends('layouts.app')

@section('content')

<div class="container">
    <br><br>
    
    <div id="wrapper">
            
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="/home"><i class="fa fa-dashboard fa-fw"></i> Naslovna</a>
                        </li>
                        <li>
                            <a href="/users"><i class="fa fa-table fa-fw"></i> Korisnici</a>
                        </li>
                        <li>
                            <a href="/posts"><i class="fa fa-edit fa-fw"></i> Tekstovi</a>
                        </li>
                        <li>
                            <a href="/roles"><i class="fa fa-bars fa-fw"></i> Ovlašćenja</a>
                        </li>
                        <li>
                            <a href="/categories"><i class="fa fa-bars fa-fw"></i> Kategorije</a>
                        </li>
                        <li>
                            <a href="/tags"><i class="fa fa-bars fa-fw"></i> Oznake</a>
                        </li>
                        <li>
                            <a href="/trashed"><i class="fa fa-bars fa-fw"></i> Kanta</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


<div id="page-wrapper">
    <br><br>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$user_count}}
                                    </div>
                                    <div>Korisnici!</div>
                                </div>
                            </div>
                        </div>
                        <a href="/users">
                            <div class="panel-footer">
                                <span class="pull-left">Vidi detalje</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-newspaper-o fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$post_count}}</div>
                                    <div>Tekstovi</div>
                                </div>
                            </div>
                        </div>
                        <a href="/posts">
                            <div class="panel-footer">
                                <span class="pull-left">Vidi detalje</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$categories_count}}</div>
                                    <div>Kategorije!</div>
                                </div>
                            </div>
                        </div>
                        <a href="/categories">
                            <div class="panel-footer">
                                <span class="pull-left">Vidi detalje</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tags fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$tags_count}}</div>
                                    <div>Oznake!</div>
                                </div>
                            </div>
                        </div>
                        <a href="/tags">
                            <div class="panel-footer">
                                <span class="pull-left">Vidi detalje</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
                    <!-- /.row -->
                <!-- /.row -->
</div> <!-- /.container -->
@endsection
