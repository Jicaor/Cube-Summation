@extends('layout.index')

@section('content')

    <!-- Banner -->
    <section id="banner">
        <div class="content">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Sample Input</div>
                        <div class="panel-body">
                            2<br>
                            4 5</br>
                            UPDATE 2 2 2 4</br>
                            QUERY 1 1 1 3 3 3</br>
                            UPDATE 1 1 1 23</br>
                            QUERY 2 2 2 4 4 4</br>
                            QUERY 1 1 1 3 3 3</bbr>
                            2 4</br>
                            UPDATE 2 2 2</br>
                            QUERY 1 1 1 1 1</br>
                            QUERY 1 1 1 2 2</br>
                            QUERY 2 2 2 2 2 2
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Sample Output</div>
                        <div class="panel-body">
                            4</br>
                            4</br>
                            27</br>
                            0</br>
                            1</br>
                            1</br>
                            </br>
                            </br>
                            </br>
                            </br>
                            </br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row textcolorBlack">
                <div class="col-xs-12">
                    <div class="panel-body">
                        <h3>Explanation</h3>
                        First test case, we are given a cube of 4 * 4 * 4 and 5 queries. Initially all the cells (1,1,1) to (4,4,4) are 0.</br>
                        <strong>UPDATE 2 2 2 4 </strong>makes the cell (2,2,2) = 4</br>
                        <strong>QUERY 1 1 1 3 3 3 </strong>. As (2,2,2) is updated to 4 and the rest are all 0. The answer to this query is 4.</br>
                        <strong>UPDATE 1 1 1 23 </strong>. updates the cell (1,1,1) to 23. <strong>QUERY 2 2 2 4 4 4</strong>. Only the cell (1,1,1) and (2,2,2) are non-zero and (1,1,1) is not between (2,2,2) and (4,4,4). So, the answer is 4.</br>
                        <strong>QUERY 1 1 1 3 3 3 </strong>. 2 cells are non-zero and their sum is 23+4 = 27.
                    </div>
                </div>
                <div class="col-xs-12"></div>
            </div>

            <a href="#resolvePanel" class="button scrolly buttonResolve">TRY IT YOURSELF</a>
        </div>
    </section>

    <!-- Resolve Panel -->
    <section id="resolvePanel" class="wrapper">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                <h2>Type the commands and press RUN</h2>
            </div>
            <form action="">
                <div class="col-xs-12 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Input</div>
                        <textarea class="form-control textAreaCustomize" rows="15" id="input"></textarea>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-2 text-center">
                    <button type="button" class="btn btn-success btn-lg" style="width: 100%; margin-bottom: 20px;">Run ></button>
                </div>
                <div class="col-xs-12 col-sm-5">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Output</div>
                        <textarea class="form-control textAreaCustomize" rows="15" id="result" readonly></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

@stop
