<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table-size{
            border-collapse:collapse;
            margin-left:250px;
        }
        .table-size thead tr{
           background-color:orange;
           color: green;
           border: 1px solid #ddddd;
           
        }
        .size{
            padding: 3px;
        }
        .table-size tbody tr{
            border-bottom: 1px solid #dddddd;
            border-left: 1px solid #dddddd;
            border-right: 1px solid #dddddd;
            border-top: 1px solid #dddddd;
        }
        .order{
            margin-left:14px;
            border-right: 1px solid red;
            
        }
        .order-1{
            margin-left:18px;
            
            
        }
        .card-header h3{
            margin-left:315px;
        }
        .table-size tbody tr:last-of-type{
            border-bottom: 2px solid orange;  
        }
    </style>
</head>
<body>
<div class="card">
    <div class="card-header">
    <h3>***Syllabus***</h3>
    </div>
    <div class="card-body">
        <table class="table-size">
            <thead>
                <tr>
                    <th><h5 class="size">Serial</h5></th>
                    <th><h5 class="size">Subject</h5></th>
                    <th><h5 class="size">Code</h5></th>
                    <th><h5 class="size">Class Teacher</h5></th>
                    
                </tr>
            </thead>
            <tbody>
              
                <tr class="ms-3">
                    <td ><h6 class="order">01</h6> </td>
                    <td ><h6 class="order">Bangla</h6></td>
                    <td ><h6 class="order">101</h6></td>
                    <td ><h6 class="order-1">Mst. Joti Khatun</h6></td>
                    
                    
                </tr>
                <tr class="ms-3">
                    <td ><h6 class="order">02</h6> </td>
                    <td ><h6 class="order">English</h6></td>
                    <td ><h6 class="order">102</h6></td>
                    <td ><h6 class="order-1">Mst. Munmun Khatun</h6></td>
                    
                    
                </tr>
                <tr class="ms-3">
                    <td ><h6 class="order">03</h6> </td>
                    <td ><h6 class="order">Math</h6></td>
                    <td ><h6 class="order">103</h6></td>
                    <td ><h6 class="order-1">Md. Firoj Hossain</h6></td>
                    
                    
                </tr>
                <tr class="ms-3">
                    <td ><h6 class="order">04</h6> </td>
                    <td ><h6 class="order">Social Science</h6></td>
                    <td ><h6 class="order">104</h6></td>
                    <td ><h6 class="order-1">Md. Omor Khan</h6></td>
                    
                    
                </tr>
                <tr class="ms-3">
                    <td ><h6 class="order">05</h6> </td>
                    <td ><h6 class="order">Islamic Study</h6></td>
                    <td ><h6 class="order">105</h6></td>
                    <td ><h6 class="order-1">Mst. Joli Khatun</h6></td>
                    
                    
                </tr>
               
            </tbody>
        </table>
    </div>
</div> 
</body>
</html>


