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
    <link href="css/plugins/ladda/ladda.min.css" rel="stylesheet">

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

        #insertModalVenda .modal-dialog {
            /* 80% of window height */
            width: 80%;
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
                    <h2>Vendas</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a>Entidades</a>
                        </li>
                        <li class="active">
                            <strong>Vendas</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content">
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Vendas</h5>
                        </div>
                        <div class="ibox-content">

                            <div class="table-responsive">
    		                    <table class="table table-striped table-bordered table-hover dataTables-example" >
    		                    <thead>
    		                    	<tr>
    				                	<th nowrap="nowrap" width="5%"><center>CÓDIGO</center></th>
    				                	<th nowrap="nowrap" width="10%"><center>DATA</center></th>
    				                	<th nowrap="nowrap" width="40%"><center>CLIENTE</center></th>
                                        <th nowrap="nowrap" width="5%"><center>VALOR ORIGINAL</center></th>
                                        <th nowrap="nowrap" width="5%"><center>VALOR DESCONTO</center></th>
                                        <th nowrap="nowrap" width="5%"><center>VALOR TOTAL</center></th>
    				                	<th nowrap="nowrap" width="45%"><center>AÇÕES</center></th>
    				            	</tr>
    		                    </thead>
    		                    <tfoot>
    		                    	<tr>
    				                	<th nowrap="nowrap" width="5%"><center>CÓDIGO</center></th>
                                        <th nowrap="nowrap" width="10%"><center>DATA</center></th>
                                        <th nowrap="nowrap" width="50%"><center>CLIENTE</center></th>
                                        <th nowrap="nowrap" width="5%"><center>VALOR ORIGINAL</center></th>
                                        <th nowrap="nowrap" width="5%"><center>VALOR DESCONTO</center></th>
                                        <th nowrap="nowrap" width="5%"><center>VALOR TOTAL</center></th>
                                        <th nowrap="nowrap" width="35%"><center>AÇÕES</center></th>
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
<div class="modal inmodal fade" id="insertModalVenda" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">X</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title pull-left">Gerenciar Venda</h4>
            </div>
            <div class="modal-body">
            	<form class="form-horizontal">
	                <div class="row">
	                    <div class="col-sm-2">
	                    	<div class="form-group">
	                                <label class="control-label">Código da Venda:</label>
	                                <div>
                                        <input type="text" name="codTxt" id="codTxt" class="form-control input-sm" style="size: 10px">
                                    </div>
	                        </div>
	                    </div>
	                </div>
                    <div class="row">   
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Forma de Pagamento:</label>
                                <div>
                                   <select name="selectFormaPgto" id="selectFormaPgto" class="form-control selectFormaPgto">
                                       <option value="1">Dinheiro</option>
                                       <option value="2">Cartão</option>
                                   </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                <label class="control-label">Parcelas:</label>
                                <div>
                                   <select name="selectParcela" id="selectParcela" class="form-control selectParcela">
                                       <option value="1">Á Vista</option>
                                       <option value="2">2x</option>
                                       <option value="3">3x</option>
                                       <option value="4">4x</option>
                                       <option value="5">5x</option>
                                       <option value="6">6x</option>
                                       <option value="7">7x</option>
                                       <option value="8">8x</option>
                                       <option value="9">9x</option>
                                       <option value="10">10x</option>
                                   </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="form-group">
                                    <label class="control-label">Data da 1ª Parcela:</label>
                                    <div>
                                        <input type="date" name="dtParcela" id="dtParcela" class="form-control input-sm" style="size: 10px">
                                    </div>
                            </div>
                        </div>
                    </div>
	                <div class="row">	
	                	<div class="col-sm-6">        
	                            <div class="form-group">
	                                <label class="control-label">Cliente:</label>
	                                <input type="text" name="cliTxt" id="cliTxt" placeholder="Digite um Cliente" class="form-control input-sm">
	                            </div>
	                    </div>
	                </div>
                    <div class="row">
                        <button class="btn btn-default btn-sm" type="button" id="btnAdicionaLinha"></i> Adicionar Produto</button>
                    </div>
                    <div class="row">
                        <div class="table-responsive">
                            <table id="tblVenda" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="14%">Código</th>
                                        <th width="40%">Descrição</th>
                                        <th width="6%">Quantidade</th>
                                        <th width="10%">Valor</th>
                                        <th width="10%">Desconto</th>
                                        <th width="10%">Subtotal</th>
                                        <th width="10%">Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><input type="text" name="codProdTxt" id="codProdTxt" placeholder="Código" class="form-control input-sm"></td>
                                    <td><input type="text" name="descProdTxt" id="descProdTxt" placeholder="Descição do Produto" class="form-control input-sm" readonly="readonly"></td>
                                    <td><input type="text" name="numQuantidade" id="numQuantidade" placeholder="" class="form-control input-sm"></td>
                                    <td><input type="text" name="valorVenda" id="valorVenda" placeholder="" class="form-control input-sm" readonly="readonly"></td>
                                    <td><input type="text" name="valorDesconto" id="valorDesconto" placeholder="" class="form-control input-sm"></td>
                                    <td><input type="text" name="valorSubtotal" id="valorSubtotal" placeholder="" class="form-control input-sm" readonly="readonly"></td>
                                    <td align="center"><button class="btn btn-danger btn-sm" type="button" id="btnRemoveLinha"><i class="fa fa-trash"></i></button></td>
                                </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="3">Total: </th>
                                        <th width="10%"><input type="text" name="totalOriginal" id="totalOriginal" placeholder="" class="form-control input-sm" readonly="readonly"></th>
                                        <th width="10%"><input type="text" name="totalDesconto" id="totalDesconto" placeholder="" class="form-control input-sm" readonly="readonly"></th>
                                        <th width="10%"><input type="text" name="totalSubTotal" id="totalSubTotal" placeholder="" class="form-control input-sm" readonly="readonly"></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                </form>                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Sair</button>
                <button type="button" id="insertVenda" class="btn btn-primary insertVenda" data-acao="insert">Salvar</button>
                <button type="button" id="updateVenda" class="btn btn-primary updateVenda" data-acao="update">Alterar</button>
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

        <!-- Ladda -->
    <script src="js/plugins/ladda/spin.min.js"></script>
    <script src="js/plugins/ladda/ladda.min.js"></script>
    <script src="js/plugins/ladda/ladda.jquery.min.js"></script>

    <!-- Typehead -->
    <script src="js/plugins/typehead/bootstrap3-typeahead.min.js"></script>

    <!-- Typehead -->
    <script src="js/plugins/priceformat/jquery.priceformat.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){

            $('#insertModalVenda').on('show.bs.modal', function(){
                $('.form-horizontal').trigger("reset");
            });
     	
            var Table = $('.dataTables-example').DataTable({
            	"bDestroy": true,
            	"ajax": {
                	type : "POST",
	                url: '../includes/ajaxVendas.php',
	            },
	            "columns": [
	                        { "data": "codigo"},
	                        { "data": "data_venda"},
                            { "data": "cli_desc" },
                            { "data": "valorOriginal" },
                            { "data": "valorDesconto" },
	                        { "data": "valorLiquido" },
	                        { "data": null, "render": function(data, type, row){
		                        
		                        	var btnEdit    = '<button class="btn btn-primary btn-sm updateVenda" type="button" id="btnUpdate" data-acao="update" data-codigo=' + data.codigo + '><i class="fa fa-edit"></i></button>';
		                        	var btnDisable = '<button class="btn btn-danger btn-sm disableVenda" type="button" id="btnDisable" data-acao="disable" data-codigo=' + data.codigo + '><i class="fa fa-toggle-off"></i></button>';
		                        	var btnEnable  = '<button class="btn btn-success btn-sm enableVenda" type="button" id="btnEnable" data-acao="enable" data-codigo=' + data.codigo + '><i class="fa fa-toggle-on"></i></button>';

									return btnEdit + '&nbsp&nbsp&nbsp&nbsp' + 
                                           btnDisable + '&nbsp&nbsp&nbsp&nbsp' + 
                                           btnEnable;
								} 
							},
	                       ],
                       "columnDefs": [
        		       		          	{"targets": [0,1,6], "class":'text-center'},
                                        {"targets": [3,4,5], "class":'text-right'},
        		                   ],
                       "language": {
     		                "url": "../includes/Portuguese-Brasil.json"
     		            },
                       pageLength: 10,
                       responsive: true,
                       dom: 'Bfrtip',
                       buttons: [
                           {

                               text: '<i class="fa fa-pencil-square-o"></i>Adicionar Venda',
                               action: function ( e, dt, node, config ) {
                            	   null; //$('#insertModalCategoria').modal('show');
                               },
                               init: function (dt, node, config) {
                                   $(node).attr('data-acao', 'insert');
                                   $(node).attr('id', 'btnInsert');
                                   $(node).removeClass('btn-default');
                               },
                               className: 'btn-primary',
                           }
                       ]

            });

            function formataDinheiro(n) {
                return n.replace('.', ',').replace(/(\d)(?=(\d{3})+\,)/g, "$1.");
            }

            function atualizaTotais(){

                var vValorDesconto = 0;
                var vValorOriginal = 0;
                var vSubtotal = 0;

                $('#insertModalVenda tbody #codProdTxt').each(function(index, element){

                    $row = $(this).closest('tr');

                    vValorOriginal  = vValorOriginal + parseFloat($row.find('#numQuantidade').val() * $row.find('#valorVenda').val());

                    vValorDesconto  = vValorDesconto + parseFloat($row.find('#valorDesconto').val());

                    vSubtotal       = vSubtotal + parseFloat($row.find('#valorSubtotal').val());

                });

                $('#insertModalVenda tfoot #totalOriginal').val(vValorOriginal.toFixed(2));
                $('#insertModalVenda tfoot #totalDesconto').val(vValorDesconto.toFixed(2));
                $('#insertModalVenda tfoot #totalSubTotal').val(vSubtotal.toFixed(2));


            }

             $(document).on('change', '#insertModalVenda tbody #numQuantidade', function(e){
                    
                    e.preventDefault();

                    $row = $(this).closest('tr');

                    var vQuantidade = $row.find('#numQuantidade').val();
                    var vValorVenda = $row.find('#valorVenda').val();
                    var vDescconto  = $row.find('#valorDesconto').val();
                    var vSubtotal = parseFloat((vValorVenda) * (vQuantidade) - (vDescconto)).toFixed(2);
                    
                    $row.find('#valorSubtotal').val(vSubtotal);

                    atualizaTotais();


            });

            $(document).on('change', '#insertModalVenda tbody #valorDesconto', function(e){
                    
                    e.preventDefault();

                    $row = $(this).closest('tr');

                    var vQuantidade = $row.find('#numQuantidade').val();
                    var vValorVenda = $row.find('#valorVenda').val();
                    var vDescconto  = $row.find('#valorDesconto').val();
                    $row.find('#valorDesconto').val(parseFloat(vDescconto).toFixed(2));
                    console.log("vDescconto: "  + vDescconto);
                    var vSubtotal = parseFloat((vValorVenda) * (vQuantidade) - (vDescconto)).toFixed(2);
                    
                    $row.find('#valorSubtotal').val(vSubtotal);

                    atualizaTotais();


            });


            $(document).on('change', '#insertModalVenda tbody #codProdTxt', function(e){
                e.preventDefault();

                if($(this).val()){

                    $row = $(this).closest('tr');
                    console.log($row);
                    console.log($row.find('#codProdTxt').val());
                    
                    $.post(

                        "../includes/ajaxProdutos.php",
                        {acao : "selectId", codigo : $row.find('#codProdTxt').val()},

                    ).done(function(data){

                        var result = JSON.parse(data);

                        if (result.total == 1){

                            var vValorDesconto = 0;
                            var vSubtotal = 0;

                            $.map(result.data, function(val, item){

                                $row.find('#descProdTxt').val(val.descricao);
                                var vQuantidade = 1;
                                $row.find('#numQuantidade').val(vQuantidade);
                                $row.find('#valorVenda').val(val.preco_venda);
                                $row.find('#valorDesconto').val(vValorDesconto.toFixed(2));
                                vSubtotal = parseFloat(val.preco_venda * vQuantidade).toFixed(2);
                                $row.find('#valorSubtotal').val(vSubtotal);

                            });

                            atualizaTotais();

                        } else if (result.total == 0) {

                            alert("Produto Não Encontrado");

                            $row.find('#codProdTxt').focus();

                        } else {

                            alert("Problemas ao Pesquisar o Produto");

                        }
                        
                        //$('#descProdTxt').val(data.descricao);
                    });
                } else {

                    null;

                }


            });

            $(document).on('click', '#insertModalVenda tbody #btnRemoveLinha', function (e) {

                    e.preventDefault();
                    
                    if($("#insertModalVenda tbody tr").length > 1) {
                        $row = $(this).closest('tr');
                        $row.remove();
                    }

                    atualizaTotais();


            });

            $('#insertModalVenda #btnAdicionaLinha').on('click', function(e){

                var vLinha = '<tr>';
                    vLinha = vLinha + '<td><input type="text" name="codProdTxt" id="codProdTxt" placeholder="Código" class="form-control input-sm"></td>'
                    vLinha = vLinha + '<td><input type="text" name="descProdTxt" id="descProdTxt" placeholder="Descição do Produto" class="form-control input-sm" readonly="readonly"></td>'
                    vLinha = vLinha + '<td><input type="text" name="numQuantidade" id="numQuantidade" placeholder="" class="form-control input-sm"></td>'
                    vLinha = vLinha + '<td><input type="text" name="valorVenda" id="valorVenda" placeholder="" class="form-control input-sm" readonly="readonly"></td>'
                    vLinha = vLinha + '<td><input type="text" name="valorDesconto" id="valorDesconto" placeholder="" class="form-control input-sm"></td>'
                    vLinha = vLinha + '<td><input type="text" name="valorSubtotal" id="valorSubtotal" placeholder="" class="form-control input-sm" readonly="readonly"></td>'
                    vLinha = vLinha + '<td align="center"><button class="btn btn-danger btn-sm" type="button" id="btnRemoveLinha"><i class="fa fa-trash"></i></button></td>'
                    vLinha = vLinha + '</tr>';

                $('#insertModalVenda #tblVenda tbody').append(vLinha);

            });

            $('#cliTxt').typeahead({
                source: [
                    {"name": "Cliente 01", "id": "1"},
                    {"name": "Cliente 02", "id": "2"},
                ],
                afterSelect: function(item){
                    return item;
                }
            });

            $(".selectFormaPgto").select2({
                width: "95%",
                placeholder: "Forma de Pagamento",
                //allowClear: true,
                minimumResultsForSearch: Infinity
            });

            $(".selectParcela").select2({
                width: "95%",
                placeholder: "Parcela",
                //allowClear: true,
                minimumResultsForSearch: Infinity,
            });

            $(document).on('click', '#btnInsert, #btnUpdate', function (e) {

                e.preventDefault();

                var acao = $(this).data('acao');

                $('#insertVenda, #updateVenda').hide();

                $('#codTxt').prop('readonly', true);

                if(acao == 'update'){

                    $('#codTxt').attr('value',$(this).data('codigo'));
                    $('#cliTxt').attr('value',$(this).data('codigo'));

                    $('#updateVenda').show();

                } else {

                    $('#descTxt').val('A');

                    $('#codTxt').val('');

                    $('#insertVenda').show();

                }

                $('#insertModalVenda').modal('show');


            });

            $('#insertVenda, #updateVenda').on('click', function (e) { 

                e.preventDefault();

                var vCount = 0

                var acao, codigo, vDataParcela, vCliente;

                acao            = $(this).data('acao') ;
                codigo 	        = $('#codTxt');
                vDataParcela    = $('#dtParcela');
                vClientes       = $('#cliTxt');
                formaPagamento  = $('#selectFormaPgto');
                totalParcelas   = $('#selectParcela');
                dataParcela     = $('#dtParcela');
                totalOriginal   = $('#totalOriginal');
                totalDesconto   = $('#totalDesconto');
                totalVenda      = $('#totalSubTotal');

                if(!vDataParcela.val()){
                    alert("A Data da Primeira Parcela é obrigatória");
                    vDataParcela.focus();
                    return;
                }

                vClientesTH = vClientes.typeahead("getActive");

                if(!vClientesTH.id){
                    alert("Cliente é obrigatório");
                    vClientes.focus();
                    return;
                }

                $('#insertModalVenda #codProdTxt').each(function(index, element){
                    if($(element).val()){
                        vCount++;
                    }
                });

                if(!vCount){
                    alert("Informe ao menos 1 produto!");
                    return;
                }

                $.post(
                        "../includes/ajaxVendas.php",
                        {
                            "acao" : acao, 
                            "codigo" : codigo.val(), 
                            "formaPagamento": formaPagamento.val(),
                            "totalParcelas":totalParcelas.val(),
                            "dataParcela": dataParcela.val(),
                            "cliente": vClientesTH.id, 
                            "totalOriginal": totalOriginal.val(),
                            "totalDesconto": totalDesconto.val(),
                            "totalVenda": totalVenda.val(),
                            "status": 'A'
                        }
                ).done(function(data){
                    //alert(data);
                    $('#insertModalVenda').modal('hide');
                    Table.ajax.reload(null, false);
                });

            }); 

            $(document).on('click', '.enableCategory, .disableCategory', function (e) { 

                e.preventDefault();

                var acao, codigo;

                acao = $(this).data('acao') ;
                codigo = $(this).data('codigo') ;
                
                $.post(
                        "../includes/ajaxCategorias.php",
                        {"acao" : acao, "codigo" : codigo},
                ).done(function(data){
                    alert(data);
                }).always(function(data) {
                    Table.ajax.reload(null, false);
                });



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
