<!DOCTYPE html>
<html lang="en" ng-app="contactApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learning AngularJS Series</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesnt work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container" ng-controller="contactController">
      <h3>Angular Day 5</h3>
      <input type="text" ng-model="contactFilter" class="form-control"/>
        <table class="table">
          <thead>
            <th><a href="" ng-click="sortField='fname'; reverse = !reverse">First Name</a></th>
            <th><a href="" ng-click="sortField='lname'; reverse = !reverse">Last Name</a></th>
            <th><a href="" ng-click="sortField='address'; reverse = !reverse">Address</a></th>
            <th><a href="" ng-click="sortField='city'; reverse = !reverse">City</a></th>
            <th><a href="" ng-click="sortField='zipcode'; reverse = !reverse">Zipcode</a></th>
            <th><a href="" ng-click="sortField='mnumber'; reverse = !reverse">Mobile Number</a></th>
            <th><a href="" ng-click="sortField='lnumber'; reverse = !reverse">Cell Number</a></th>
          </thead>
          <tr ng-repeat="contact in contacts | filter:contactFilter | orderBy:sortField:reverse">
            <td><a href="{{ contact.fname }}" target="_blank">{{ contact.fname }}</a></td>
            <td>{{ contact.lname }}</td>
            <td>{{ contact.address }}</td>
            <td>{{ contact.city }}</td>
            <td>{{ contact.zipcode }}</td>
            <td>{{ contact.mnumber }}</td>
            <td>{{ contact.lnumber }}</td>
          </tr>
        </table>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Include AngularJS -->
    <script src="js/angular.min.js"></script>
    <!-- Linking to the football app script -->
    <script src="js/contactsApp.js"></script>

  </body>
</html>