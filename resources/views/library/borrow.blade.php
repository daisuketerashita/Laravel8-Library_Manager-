<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle"></button>
            <span class="navbar-brand" id="page-title">Borrow</span>
        </div>
    </div>
</nav>
<div id="area-book-list" class="area content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">{{ $library->name }}</h4>
                    </div>
                    <div class="content">
                        <form action="/library/borrow" method="POST">
                            <div class="author">
                                Javascriptパターン 優れたアプリケーションのための作法
                            </div>
                            <hr>
                            <div class="form-group">
                                <label for="exampleInputEmail1">return date</label>
                                <input type="date" class="form-control border-input" placeholder="date">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-success btn-fill btn-wd">borrow!</button>
                                <input type="hidden" name="id" value="1">
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>