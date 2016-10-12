@extends('layout.index')

@section('content')

    <!-- Banner -->
    <section id="banner">
        <div class="content">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Sample Input</div>
                        <div class="panel-body codePre">
<pre>
2
4 5
UPDATE 2 2 2 4
QUERY 1 1 1 3 3 3
UPDATE 1 1 1 23
QUERY 2 2 2 4 4 4
QUERY 1 1 1 3 3 3
2 4
UPDATE 2 2 2 1
QUERY 1 1 1 1 1 1
QUERY 1 1 1 2 2 2
QUERY 2 2 2 2 2 2
</pre>
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
                <form action="{{route('cube.run')}}" method="POST" name="formRun" id="formRun" role="form">

                    <div class="col-xs-12 col-sm-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Input</div>
                            {{csrf_field()}}
                            <textarea class="form-control textAreaCustomize" rows="15" id="input" name="input" required></textarea>
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-2 text-center">
                        <button type="button" class="btn btn-success btn-lg btn-run" id="run" name="run" onclick="runSummation()">Run ></button>
                    </div>

                    <div class="col-xs-12 col-sm-5">
                        <div class="panel panel-primary">
                            <div class="panel-heading">Output</div>
                            <textarea class="form-control textAreaCustomize" rows="15" id="output" name="output" readonly></textarea>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>

@stop
