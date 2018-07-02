var app = angular
			.module("home-module", [])
			.controller("list-controller", function($scope, $http){
				$http.get('services/itemservice/itemlist')
						.then(function(result){
							$scope.items = result.data;
						});

				$scope.orderInvoice = false;
				$scope.toggleInvoiceShow = function(){
					$scope.orderInvoice = !$scope.orderInvoice;
				}

				$scope.sortOrder = false;
				$scope.direction = 'top';
				$scope.changeOrder = function(){
					$scope.sortOrder = !$scope.sortOrder;
					$scope.direction == 'top' ? $scope.direction = 'bottom' : $scope.direction = 'top';
				}

				$scope.orders = [];
				$scope.totalAmount = 0;
				
				$scope.increaseOrder = function(id){
					var itemToIncrease = $scope.items.find(function(item){
						return item.item_id === id;
					});

					var itemInOrder = $scope.orders.find(function(order){
						return order.item.item_id === id;
					});
					if(itemInOrder)
					{
						itemInOrder.quantity++;
					}
					else
					{
						$scope.orders.push({
							item: itemToIncrease,
							quantity: 1
						});
					}
					$scope.totalAmount += parseInt(itemToIncrease.price);
				}

				$scope.decreaseOrder = function(id){
					var itemToDecrease = $scope.orders.find(function(order){
						return order.item.item_id === id;
					});

					if(itemToDecrease)
					{
						if(itemToDecrease.quantity > 1)
						{
							itemToDecrease.quantity --;
						}
						else
						{
							var index = $scope.orders.indexOf(itemToDecrease);
							if (index !== -1) $scope.orders.splice(index, 1);
						}
						$scope.totalAmount -= parseInt(itemToDecrease.item.price);
					}
				}

				$scope.removeFromOrder = function(id){
					var itemToRemove = $scope.orders.find(function(order){
						return order.item.item_id === id;
					});
					if(itemToRemove)
					{
						$scope.totalAmount -= parseInt(itemToRemove.item.price*itemToRemove.quantity);
						var index = $scope.orders.indexOf(itemToRemove);
						if (index !== -1) $scope.orders.splice(index, 1);
					}
				}
			})
			.controller("order-controller", function(){

			});