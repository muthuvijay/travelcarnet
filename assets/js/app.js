(function(){
	
	//Ajax handlers

	var ajax = function(){
		
		function getJSON(url,data,callback){
			
			$.getJSON(url, data, callback);
		}
		
		function postJSON(url,data,callback){
			
			$.post(url, data, callback);
		}
		
		return{
			
			get : function(u,d,c){getJSON(u,d,c);},
			post : function(u,d,c){postJSON(u,d,c);}
		};
	}();

	
	// core app
	var App = function(){
		
		function _init(){
			
			_events();
		}
		
		function _events(){
			
			$('body').on('click','.add',function(e){
				
				var target = $(e.target),
					id = target.attr('data-id'),
					type = target.attr('data-type');
				
				var params = {type : type,item_id:id,user_id : 2};
				
				var url = 'index.php/listings/savelistings';
				
				function _callback(response){
					console.log(response);
					var response = $.parseJSON(response);
					
					if(response.status){
						target.removeClass('add');
					}
				}
				
				ajax.post(url,params,_callback);
			});
		}
		
		return {
			start : _init
		};
	}();
	
	$(document).ready(function(){
		
		App.start();	
	});
	
	
})();