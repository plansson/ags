<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Data Tables</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <link href="css/plugins/dataTables/buttons.dataTables.min.css" rel="stylesheet">

    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/awesome-bootstrap-checkbox/0.3.5/awesome-bootstrap-checkbox.min.css" />

    <link href="css/plugins/select2/select2.min.css" rel="stylesheet">
    
    <style>
    
        table.dataTable.select tbody tr,
        table.dataTable thead th,
        table.dataTable tfoot th {
            cursor: pointer;
            font-size: 10px;
        }
        
        table.dataTable tbody td {
          vertical-align: middle;
        }

        span.select2-container {
            z-index:10050;
        }

    </style>
    

</head>

<body>

    <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                             </span> <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">Profile</a></li>
                            <li><a href="contacts.html">Contacts</a></li>
                            <li><a href="mailbox.html">Mailbox</a></li>
                            <li class="divider"></li>
                            <li><a href="login.html">Logout</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        IN+
                    </div>
                </li>
                <li>
                    <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Entidades</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="vFornecedores.php">Fornecedores</a></li>
                        <li><a href="vClientes.php">Clientes</a></li>
                        <li><a href="vProdutos.php">Produtos</a></li>
                        <li><a href="vCategorias.php">Categorias</a></li>
                        <li><a href="vFormasPagamento.php">Formas de Pagamento</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Operacional</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="vVendas.php">Vendas</a></li>
                        <li><a href="vPagamentos.php">Pagamentos</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Relatórios</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="vEstoqueProdutos.php">Estoque de Produtos</a></li>
                        <li><a href="vVendas.php">Vendas</a></li>
                        <li><a href="vSaldoRecebimento.php">Saldo de Recebimento</a></li>
                    </ul>
                </li>
                
            </ul>

        </div>
    </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Produtos</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Entidades</a>
                        </li>
                        <li class="active">
                            <strong>Produtos</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Produtos</h5>
                        </div>
                        <div class="ibox-content">

                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover dataTables-example" >
                                    <thead>
                                        <tr>
                                            <th nowrap="nowrap" width="5%"><center>CÓDIGO</center></th>
                                            <th nowrap="nowrap" width="25%"><center>DESCRIÇÃO</center></th>
                                            <th nowrap="nowrap" width="10%"><center>CATEGORIA</center></th>
                                            <th nowrap="nowrap" width="10%"><center>FORNECEDOR</center></th>
                                            <th nowrap="nowrap" width="5%"><center>VALOR CUSTO</center></th>
                                            <th nowrap="nowrap" width="5%"><center>VALOR VENDA</center></th>
                                            <th nowrap="nowrap" width="5%"><center>STATUS</center></th>
                                            <th nowrap="nowrap" width="35%"><center>AÇÕES</center></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th nowrap="nowrap"><center>CÓDIGO</center></th>
                                            <th nowrap="nowrap"><center>DESCRIÇÃO</center></th>
                                            <th nowrap="nowrap"><center>CATEGORIA</center></th>
                                            <th nowrap="nowrap"><center>FORNECEDOR</center></th>
                                            <th nowrap="nowrap"><center>VALOR CUSTO</center></th>
                                            <th nowrap="nowrap"><center>VALOR VENDA</center></th>
                                            <th nowrap="nowrap"><center>STATUS</center></th>
                                            <th nowrap="nowrap"><center>AÇÕES</center></th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2017
            </div>
        </div>

        </div>
        </div>
<div class="modal inmodal fade" id="insertModalProduto" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">X</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title pull-left">Gerenciar Produto</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="form-group">
                                    <label class="control-label">Código:</label>
                                    <input type="text" name="codTxt" id="codTxt" class="form-control input-sm" style="size: 10px">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="form-group">
                                <label class="control-label" for="descTxt">Descrição</label>
                                <input type="text" id="descTxt" name="descTxt" value="" placeholder="Descrição do Produto" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label" for="amountCost">Valor de Custo</label>
                                <input type="number" step="0.01" id="amountCost" name="amountCost" value="" placeholder="0" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-2">

                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label class="control-label" for="amountSale">Valor de Venda</label>
                                <input type="number" step="0.01" id="amountSale" name="amountSale" value="" placeholder="0" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Categoria</label>
                                <div>
                                    <select name ="categoriaCodigo" data-placeholder="Escolha uma Categoria..." class="selectCategory" tabindex="-1" style="display: none;">
                                    </select>
                                </div>
                                </div>
                        </div>
                        <div class="col-sm-1">

                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label class="control-label">Fornecedor</label>
                                <div>
                                    <select data-placeholder="Escolha um Fornecedor..." class="selectFornecedor" tabindex="-1" style="display: none;">
                                    </select>
                                </div>
                                </div>
                        </div>
                    </div>
                    <div class="row">   
                        <div class="col-sm-3">        
                                <div class="form-group">
                                    <div class="checkbox checkbox-primary">
                                        <input type="checkbox" name="statusCheckbox" id="statusCheckbox" value="1" checked="checked"/>
                                        <label for="statusCheckbox">Ativo</label>
                                    </div>
                                </div>
                        </div>
                    </div>
                </form>                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Sair</button>
                <button type="button" id="insertProduct" class="btn btn-primary insertProduct" data-acao="insert">Salvar</button>
                <button type="button" id="updateProduct" class="btn btn-primary updateProduct" data-acao="update">Alterar</button>
            </div>
        </div>
    </div>
</div>


    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="js/plugins/select2/select2.full.min.js"></script>

    <script src="js/plugins/dataTables/datatables.min.js"></script>
    <script src="js/plugins/dataTables/dataTables.buttons.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
        
            var Table = $('.dataTables-example').DataTable({
                "bDestroy": true,
                "ajax": {
                    'url': '../includes/ajaxProdutos.php',
                },
                "columns": [
                            { "data": "codigo"},
                            { "data": "descricao"},
                            { "data": "categoria"},
                            { "data": "fornecedor"},
                            { "data": "preco_custo"},
                            { "data": "preco_venda"},
                            { "data": "status" },
                            { "data": null, "render": function(data, type, row){
                                
                                    var btnEdit    = '<button class="btn btn-primary btn-sm updateProduct" type="button" id="btnUpdate" data-acao="update" data-codigo=' + data.codigo + ' data-desc="' + data.descricao + '" data-codcat=' + data.codigo_categoria + ' data-nomcat="' + data.categoria + '" data-nomforn="'+ data.fornecedor +'" data-codforn=' + data.codigo_fornecedor + ' data-status=' + data.status + ' data-vlrCusto=' + data.preco_custo + ' data-vlrVenda=' + data.preco_venda +'><i class="fa fa-paste"></i> Alterar</button>';
                                    var btnDisable = '<button class="btn btn-danger btn-sm disableProduct" type="button" id="btnDisable" data-acao="disable" data-codigo=' + data.codigo + '><i class="fa fa-times"></i> Desabilitar</button></div>';
                                    var btnEnable  = '<button class="btn btn-success btn-sm enableProduct" type="button" id="btnEnable" data-acao="enable" data-codigo=' + data.codigo + '><i class="fa fa-times"></i> Habilitar</button></div>';

                                    return btnEdit + '&nbsp&nbsp&nbsp&nbsp' + 
                                           btnDisable + '&nbsp&nbsp&nbsp&nbsp' + 
                                           btnEnable;
                                } 
                            },
                           ],
                       "columnDefs": [
                                        {"targets": [0,2,3,6,7], "class":'text-center'},
                                        {"targets": [4,5], "class":'text-right', "render": $.fn.dataTable.render.number( '.', ',', 2, 'R$ ' )},
                                   ],
                       "language": {
                            "url": "../includes/Portuguese-Brasil.json"
                        },
                       pageLength: 10,
                       responsive: true,
                       dom: 'Bfrtip',
                       buttons: [
                           {

                               text: 'Adicionar Produto',
                               action: function ( e, dt, node, config ) {
                                   null; //$('#insertModalCategoria').modal('show');
                               },
                               init: function (dt, node, config) {
                                   $(node).attr('data-acao', 'insert');
                                   $(node).attr('id', 'btnInsert');
                               }                               
                           }
                       ]

            });


            $(document).on('click', '#btnInsert, #btnUpdate', function (e) {

                e.preventDefault();

                var acao;

                acao = $(this).data('acao');
                
                $('#insertProduct, #updateProduct').hide();

                if(acao == 'update'){

                    $('#codTxt').prop('readonly', true);

                    $('#codTxt').val($(this).data('codigo'));
                    $('#descTxt').val($(this).attr('data-desc'));

                    var option = new Option($(this).data('nomcat'), $(this).data('codcat'), true, true);
                    selectCategory.append(option).trigger('change');

                    var option = new Option($(this).data('nomforn'), $(this).data('codforn'), true, true);
                    selectFornecedor.append(option).trigger('change');

                    if($(this).attr('data-status') == 'A'){
                        $('#statusCheckbox').prop('checked', true);
                    } else {
                        $('#statusCheckbox').prop('checked', false);
                    }
                    $('#amountCost').val($(this).data('vlrcusto'));
                    $('#amountSale').val($(this).data('vlrvenda'));

                    $('#updateProduct').show();

                } else {

                    $('#codTxt,#descTxt').val('');

                    $('#amountCost,#amountCost').val(0);

                    $('.selectCategory,.selectFornecedor').val();

                    $('#statusCheckbox').prop('checked', true);

                    $('#insertProduct').show();

                }

                $('#insertModalProduto').modal('show');


            });

            $('#insertProduct, #updateProduct').on('click', function (e) { 

                e.preventDefault();

                var acao, codigo, nome, status;
                var valorCusto, valorVenda, categoria, fornecedor;


                acao        = $(this).data('acao') ;
                codigo      = $('#codTxt');
                nome        = $('#descTxt');
                valorCusto  = $('#amountCost');
                valorVenda  = $('#amountSale');
                categoria   = $('.selectCategory');
                fornecedor  = $('.selectFornecedor');
                status      = $('#statusCheckbox').prop('checked') ? 'A' : 'I';

                if(acao == "insert" && !codigo.val()){
                    alert("Insira o Código do Produto!");
                    codigo.focus();
                    return;
                }

                if(!nome.val()){
                    alert("A descrição é obrigatória");
                    nome.focus();
                    return;
                }

                if(!valorVenda.val()){
                    alert("O valor de Venda é obrigatório. Valor: " + valorVenda.val());
                    valorVenda.focus();
                    return;
                }

                /*if(valorVenda.val() < valorCusto.val()){
                    alert("O valor de Venda deve ser Maior ou Igual ao Valor de Custo. Valor: " + valorVenda.val());
                    valorVenda.focus();
                    return;
                }*/

                 if(!categoria.val()){
                    alert("Categoria é obrigatória");
                    categoria.focus();
                    return;
                }

                if(!fornecedor.val()){
                    alert("Fornrcedor é obrigatório");
                    fornecedor.focus();
                    return;
                }

                $.post(
                        "../includes/ajaxProdutos.php",
                        {"acao" : acao, "codigo": codigo.val(), "nome": nome.val(), "valorCusto" : valorCusto.val(), "valorVenda": valorVenda.val(), "categoriaId": categoria.val(), "fornecedorId": fornecedor.val(), "status" : status}
                ).done(function(data){
                    //alert(data);
                    $('#insertModalProduto').modal('hide');
                    Table.ajax.reload(null, false);
                });

            }); 

            $(document).on('click', '.enableProduct, .disableProduct', function (e) { 

                e.preventDefault();

                var acao, codigo;

                acao = $(this).data('acao') ;
                codigo = $(this).data('codigo') ;
                
                $.post(
                        "../includes/ajaxProdutos.php",
                        {"acao" : acao, "codigo" : codigo}
                ).done(function(data){
                    //alert(data);
                    Table.ajax.reload(null, false);
                });

            });

            var selectCategory = $('.selectCategory').select2({
            	width: "95%",
                ajax:{
                    url:"../includes/ajaxCategorias.php",
                    dataType:"json",
                    type: "GET",
                    data: function (term, page) {
                        return {
                        	nome: term, //search term
                        	acao: "select",
                            page_limit: 10 // page size
                        };
                    },
                    processResults: function(data){
                        /*var data = $.map(data.data, function (obj) {
                                      obj.id = obj.id || obj.codigo; // replace pk with your identifier
                                      obj.text = obj.text || obj.descricao;

                                      return obj;
                                    });*/
                        return{
                            results:data.data
                        };
                    },
                    cache:true,
                },
                dropdownParent: $("#insertModalProduto"),
            });

            var selectFornecedor = $('.selectFornecedor').select2({
            	width: "95%",
                ajax:{
                    url:"../includes/ajaxFornecedores.php",
                    dataType:"json",
                    type: "GET",
                    data: function (term, page) {
                        return {
                        	nome: term, //search term
                        	acao: "select",
                            page_limit: 10 // page size
                        };
                    },
                    processResults: function(data){
                    	/*var data = $.map(data.data, function (obj) {
                            obj.id = obj.id || obj.codigo; // replace pk with your identifier
                            obj.text = obj.text || obj.descricao;

                            return obj;
                          });*/
                        return{
                            results:data.data
                        };
                    },
                    cache:true,
                },
                dropdownParent: $("#insertModalProduto"),
            });

        });

    </script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
    </script>


</body>

</html>