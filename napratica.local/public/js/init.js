/**
 * 
 */

(function($) {

	$.fn.app = function(options) {
		settings = $.extend({
			element : "#container",
		}, options);

		$(this).ajax({});

		$(this).on("click", ".btn-ajax", function(event) {
			event.preventDefault();
			$(this).ajax({
				url : this.href,
				dataTarget : '#container'
			});
		});

		$(this).on("click", '#myTabs a', function(event) {
			event.preventDefault();
			$(this).ajax({
				url : this.href,
				dataTarget : '#' + $(this).attr('aria-controls')
			});

			$(this).tab('show');
		});

		$(this).on("click", ".date", function() {
			$(this).datepicker({
				language : "pt-BR",
				orientation : "top auto",
				autoclose : true
			});
		});

		$(this).on("click", ".btn-openModal", function() {
			$('#myModal').modal({
				show : true
			});
		});
		
		//console.log($('body').children("#clifor"));

		$(this).on("change", "#clifor", function() {
			
			var $cliforText = $("#clifor").find('option:selected').text();
						
			$( this ).parent().parent().children().attr('value',$cliforText);

			console.log($( this ).parent().parent().children());
		});

	};

	/**
	 * $('#atributo').calculaTributos({'icms':12,'cor':'verde'});
	 */
	$.fn.calculaTributos = function(options) {
		settings = $.extend({
			cor : 'azul'
		}, options);

		if (options.cor = 'vermelho') {
			$(this).val(15);
		}
		if (options.cor == 'verde') {
			$(this).val(options.icms);
		}

	};

	$.fn.loading = function(options) {
		settings = $.extend({
			backgroundColor : "white"
		}, options);

		element.on("click", ".btn-ajax", function(event) {
			event.preventDefault();
			$(this).ajax({});
		});
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

		$.ajax({
			url : settings.url,
			type : settings.type,
			dataType : settings.dataType,
			data : settings.data,
			success : function(result) {
				$(settings.dataTarget).html(result);
			},
			beforeSend : function() {
				$('.loading').delay("slow").css({
					display : "block"
				});
			},
			complete : function() {
				$('.loading').delay("slow").css({
					display : "none"
				});
			}
		});
	};

	$.fn.teste = function(options) {
		settings = $.extend({
			'cor' : 'red',
			'elemento' : '#elementoTest'
		});

		$(this).click(function() {
			console.log($('#elemento').attr('data-teste'));
			$(settings.elemento).slideUp(10);
		});

	};

}(jQuery));