/**
 * @desc: Componente/SelectBox
 * @author: Ronaldo Goncalves
 * 
 */

(function($) {

	$.fn.ERPFlex_SelectBox = function(options) {
		settings = $.extend({}, options);

		$.each($(this).find("[data-mtd]"), function(k, v) {

			var mtd = $(v);

			$(
					'<span class="nomeCampo">' + mtd.data('mtd')
							+ ':</span><input type="text">').insertBefore(mtd);

			$(this).on("click", mtd, function(event) {

				event.preventDefault();
				$(this).ERPFlex_Modal({
					mtd : mtd
				});
			});
		});

	};

	$.fn.ERPFlex_Grid = function(options) {

		settings = $.extend({}, options);

		var mtdElement = settings.mtd;

		var mtd = mtdElement.data("mtd");

		var element = $('<div id="' + mtdElement.data("mtd") + '"></div>')
				.appendTo($(this));

		var dataAlias = this.ERPFlex_Alias({
			data : {
				mtd : mtd
			}
		});

		// var FieldValues = $("#FieldValues").val();
		// var searchGrid = $("#searchGrid").val();

		var dataSource = new kendo.data.DataSource({
			type : "json",
			serverSorting : true,
			serverFiltering : true,
			allowUnsort : true,
			transport : {
				read : {
					url : "/componentes/alias",
					dataType : "json",
					contentType : "application/json; charset=utf-8",
					data : {
						mtd : mtd
					}
				}
			},
			serverPaging : dataAlias.serverPaging,
			serverSorting : dataAlias.serverSorting,
			serverFiltering : dataAlias.serverFiltering,
			schema : {
				data : function(data) {
					return data.items;
				},
				total : function(data) {
					return data.totalItems;
				}
			},
			pageSize : dataAlias.pageSize
		});

		element
				.kendoGrid({
					dataSource : dataSource,
					columns : dataAlias.columns,
					sortable : dataAlias.sortable,
					selectable : true,
					pageable : {
						refresh : dataAlias.pageable['refresh'],
						pageSizes : dataAlias.pageable['pageSizes']
					},
					change : function() {
						var row = this.select();
						var dataRow = this.dataSource.getByUid(row.data("uid"));

						var id = dataRow["" + dataAlias.valueCallBack + ""];
						mtdElement.prev().val(id);

						$("#" + id).remove();

						$(
								'<input id="'
										+ id
										+ '" type="hidden" name="valueCallBack" data-value="'
										+ JSON.stringify(dataRow) + '">')
								.insertAfter(mtdElement);

						$("body").removeClass();
						$(".bootbox, .modal-backdrop").remove();

					}
				});

		if (dataAlias.componentes) {

			// var arr = new Array();
			var dataComponente = '';
			$.each(dataAlias.componentes, function(k, v) {
				// var dataComponente = $(element)[k]();
				// arr.push(dataComponente);

				dataComponente += $(element)[k]();
			});

			$(dataComponente).insertBefore(element);
			// element.prepend(arr);
		}
	};

	$.fn.ERPFlex_Modal = function(options) {

		settings = $.extend({
			data : false
		}, options);

		bootbox.dialog({
			size : "large",
			title : "Cliente",
			message : function() {
				$(this).ERPFlex_Grid({
					mtd : settings.mtd
				});
			},
			buttons : {
				cancel : {
					label : "Cancelar",
					className : "btn-default"
				},
				success : {
					label : "Confirmar",
					className : "btn-ok",
					callback : function() {

					}
				}
			}
		});

	};

	$.fn.ERPFlex_ToolBarSearch = function(options) {
		settings = $.extend({
			data : false
		}, options);

		var html = '';
		html += '<div class="toolGrid">';
		html += '<div class="row">';
		html += '<div class="col-sm-6">';
		html += '<p class="campo-3-col">';
		html += '<label>';
		html += '<span class="">Pesquisar na coluna : </span>';
		html += '<select id="FieldValues">';
		for ( var i in this.data("kendoGrid").columns) {
			var colum = this.data("kendoGrid").columns[i];
			if (colum.field) {

				html += '<option value="' + colum.field + '">' + colum.title
						+ '</option>';

			}
		}
		html += '</select>';
		html += '</label>';
		html += '<label>';
		html += '<span class="">Por : </span>';
		html += '<span class="estInpGrid">';
		html += '<input type="text" id="searchGrid">';
		html += '<span title="" data-placement="bottom" data-toggle="tooltip" class="lupaGridSearch" data-original-title="Buscar">';
		html += '</span>';
		html += '<span class="clearInput"></span>';
		html += '</span>';
		html += '</label>';
		html += '</p>';
		html += '<div class="clear"></div>';
		html += '</div>';
		html += '<div class="col-sm-6"></div>';
		html += '</div>';
		html += '</div>';

		return html;
	};

	$.fn.ERPFlex_ToolBar = function(options) {

		settings = $.extend({
			data : false
		}, options);

		var html = '<div class="confApp">';
		html += '<a title="" data-placement="bottom" data-toggle="tooltip" class="btn-incluir" href="exemplos/editar" data-original-title="Incluir"></a>';
		html += '<a title="" data-placement="bottom" data-toggle="tooltip" class="btn-ajuda" href="javascript:Ajuda(\'Ajuda\',\'teste\')" data-original-title="Ajuda"></a>';
		html += '<a title="" data-placement="bottom" data-toggle="tooltip" class="btn-imprimir" href="imprimir" data-original-title="Imprimir"></a>';
		html += '</div>';

		return html;

	};

	$.fn.ERPFlex_Alias = function(options) {

		settings = $.extend({
			async : false,
			url : '/componentes/alias',
			dataTarget : this,
			type : "GET",
			dataType : "json",
			data : false
		}, options);

		var jqXHR = $.ajax({
			method : settings.type,
			url : settings.url,
			dataType : settings.dataType,
			data : settings.data,
			async : settings.async
		});

		var resp = JSON.parse(jqXHR.responseText);

		if (!resp.success) {
			alert(resp.msg);
		}

		return resp;
	};

	$.fn.ERPFlex_SearchColumm = function(options) {

		settings = $.extend({
			dataTarget : this,
			data : false
		}, options);

		for ( var i in this.data("kendoGrid").columns) {
			var colum = this.data("kendoGrid").columns[i];
			if (colum.field) {
				$("#FieldValues").append($('<option>', {
					value : colum.field,
					text : colum.title
				}));
			}
		}
	};

	$.fn.ajax = function(options) {

		settings = $.extend({
			async : false,
			url : '/menu/menu.php',
			dataTarget : '#container',
			type : "POST",
			dataType : "html",
			data : false
		}, options);

		var $modal = this.data('modal');

		if ($modal) {
			settings.dataTarget = $(this.data('target'));
			$(settings.dataTarget).modal({
				show : true
			});

			settings.dataTarget = $(this.data('target') + '-resp');
		}

	};

})(jQuery);