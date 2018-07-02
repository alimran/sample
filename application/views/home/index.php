<?php $this->view('layouts/header'); ?>

<script type="text/javascript" src="public/js/home.js"></script>

<?php $this->view('layouts/navbar-user'); ?>
<br/>
<br/>
<div class="container" ng-app="home-module">
	<div class="row" ng-controller="list-controller">
		<div class="col-md-12" ng-hide="orderInvoice">
			<div class="col-md-7">
				<div class="panel panel-info">
					<div class="panel-heading">
						<strong>Item List</strong>
					</div>
					<div class="panel-body">
						<table class="table table-responsive">
							<tr>
								<th>Item Name</th>
								<th>Shop Name</th>
								<th ng-click="changeOrder()"><label style="cursor: pointer;">Price</label> <i class="glyphicon glyphicon-triangle-{{direction}}" style="font-size:10px;"></i></th>
								<th>Choice</th>
							</tr>
							<tr ng-repeat="item in items | orderBy:price:sortOrder">
								<td><a href="#">{{item.item_name}}</a></td>
								<td>{{item.shop_name}}</td>
								<td>{{item.price}}</td>
								<td>
									<button class="btn btn-xs btn-info" ng-click="increaseOrder(item.item_id)"><i class="glyphicon glyphicon-plus"></i></button>
									<button class="btn btn-xs btn-danger" ng-click="decreaseOrder(item.item_id)"><i class="glyphicon glyphicon-minus"></i></button>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
			<div class="col-md-5">
				<div class="panel panel-info">
					<div class="panel-heading">
						<strong>My Order</strong>
						<label class="pull-right" style="color: maroon; font-size: 18px; margin-left:5px; margin-right:5px;">{{totalAmount}}</label>
						<label class="pull-right" style="color: maroon; font-size: 18px;">Total : </label>
					</div>
					<div class="panel-body">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>Item</th>
									<th>Quantity</th>
									<th>Price</th>
									<th>Option</th>
								</tr>
							</thead>
							<tbody>
								<tr ng-repeat="order in orders">
									<td>{{order.item.item_name}}</td>
									<td>{{order.quantity}}</td>
									<td>{{order.item.price * order.quantity}}</td>
									<td><button class="btn btn-xs btn-danger" ng-click="removeFromOrder(order.item.item_id)"><i class="glyphicon glyphicon-remove"></i></button></td>
								</tr>
							</tbody>
						</table>
						<button class="btn btn-info btn-sm pull-right" ng-click="toggleInvoiceShow()">Order</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-12" ng-show="orderInvoice">
			<div class="col-md-8 col-md-offset-2" style="border: 1px solid;">
	    		<div class="invoice-title">
	    			<h2>Invoice</h2><h4 class="pull-right">Order # 1318-2208-000001</h4>
	    		</div>
	    		<hr>
	    		<div class="row">
	    			<div class="col-xs-6">
	    				<address>
	    				<strong>Billed To:</strong><br>
	    					John Smith<br/>
	    					Room# 42010, Annex-4
	    				</address>
	    			</div>
	    			<div class="col-xs-6 text-right">
	    				<address>
	        			<strong>Order Date:</strong><br>
	    					22-Aug-2017<br/>12:34 PM
	    				</address>
	    			</div>
	    		</div>
	    	</div>

			<div class="col-md-8 col-md-offset-2" style="border: 1px solid;">
	    		<div class="panel panel-default">
	    			<div class="panel-heading">
	    				<h3 class="panel-title"><strong>Order summary</strong></h3>
	    			</div>
	    			<div class="panel-body">
	    				<div class="table-responsive">
	    					<table class="table table-condensed">
	    						<thead>
	                                <tr>
	        							<td><strong>Item</strong></td>
	        							<td class="text-center"><strong>Price</strong></td>
	        							<td class="text-center"><strong>Quantity</strong></td>
	        							<td class="text-right"><strong>Totals</strong></td>
	                                </tr>
	    						</thead>
	    						<tbody>
	    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
	    							<tr>
	    								<td>BS-200</td>
	    								<td class="text-center">$10.99</td>
	    								<td class="text-center">1</td>
	    								<td class="text-right">$10.99</td>
	    							</tr>
	                                <tr>
	        							<td>BS-400</td>
	    								<td class="text-center">$20.00</td>
	    								<td class="text-center">3</td>
	    								<td class="text-right">$60.00</td>
	    							</tr>
	                                <tr>
	            						<td>BS-1000</td>
	    								<td class="text-center">$600.00</td>
	    								<td class="text-center">1</td>
	    								<td class="text-right">$600.00</td>
	    							</tr>
	    							<tr>
	    								<td class="thick-line"></td>
	    								<td class="thick-line"></td>
	    								<td class="thick-line text-center"><strong>Subtotal</strong></td>
	    								<td class="thick-line text-right">$670.99</td>
	    							</tr>
	    							<tr>
	    								<td class="no-line"></td>
	    								<td class="no-line"></td>
	    								<td class="no-line text-center"><strong>Shipping</strong></td>
	    								<td class="no-line text-right">$15</td>
	    							</tr>
	    							<tr>
	    								<td class="no-line"></td>
	    								<td class="no-line"></td>
	    								<td class="no-line text-center" style="border-top: 1px solid;"><strong>Total</strong></td>
	    								<td class="no-line text-right" style="border-top: 1px solid;"><strong>$685.99</strong></td>
	    							</tr>
	    						</tbody>
	    					</table>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
		</div>
	</div>
	<br/>
</div>

<?php $this->view('layouts/footer'); ?>