
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

        body{
            margin: 20px;
        }
    
        span.select2-container {
            z-index:10050;
        }

    </style>
</head>
<body>
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

        	/*
            <button type="button" id="btnExport" class="btn btn-primary">Exportar</button>
            $("#btnExport").click(function(e) {
            	e.preventDefault();
            	var uri = 'data:application/vnd.ms-excel;base64,'
            	    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><?xml version="1.0" encoding="UTF-8" standalone="yes"?><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
            	    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
            	    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
            	    table = document.getElementById("dvData");
            	    //$('#toExcel').html($(table).html());
            	    //$('#toExcel').find("thead > tr > th:last-child").remove();
            	    //$('#toExcel').find("tbody > tr > td:last-child").remove();
            	    var toExcel = $(table).html();
            	    var ctx = {
            	        worksheet: name || '',
            	        table: toExcel
            	    };
            	    //$('#toExcel').remove();
            	    window.open(uri + base64(format(template, ctx)));
                
            });
            */
            var initValue = 10;

            var Select = $('.selectCategory').select2({
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
            });

            var option = new Option("Bem Estar", initValue, true, true);
            Select.append(option);
            Select.trigger('change');
        });     
    </script>           
</body>