
function search(){
   

    var blood  = document.getElementById("txt_blood").value;
    var gender  = document.getElementById("txt_gender").value;
    var state  = document.getElementById("sts").value;
    var city  = document.getElementById("state").value;
    

      $.ajaxSetup({
          headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
         $.ajax({
            type:'POST',
            url:'/searching',
            data:{blood:blood, gender:gender, state:state, city:city},
            success:function(data){
  
              var  myList = JSON.parse(data);
              if(myList.length == 0){
                $("#reg").show().delay(5000).fadeOut();
                $("#reg").text("😔 Sorry No Donor Availble In Your Choosen City And State");
                $('#reg').css('display', 'block'); 

              }
              else{
              
              var selector = "#excelDataTable";
              buildHtmlTable(selector, myList)
              }
  
            }
         });
  
         // Builds the HTML Table out of myList.
  function buildHtmlTable(selector, myList) {
    var columns = addAllColumnHeaders(myList, selector);
  
    for (var i = 0; i < myList.length; i++) {
      var row$ = $('<tr/>');
      for (var colIndex = 0; colIndex < columns.length; colIndex++) {
        var cellValue = myList[i][columns[colIndex]];
        if (cellValue == null) cellValue = "";
        row$.append($('<td/>').html(cellValue));
      }
      $(selector).append(row$);
    }
  }
  
  // Adds a header row to the table and returns the set of columns.
  // Need to do union of keys from all records as some records may not contain
  // all records.
  function addAllColumnHeaders(myList, selector) {
    var columnSet = [];
    var headerTr$ = $('<tr/>');
  
    for (var i = 0; i < myList.length; i++) {
      var rowHash = myList[i];
      for (var key in rowHash) {
        if ($.inArray(key, columnSet) == -1) {
          columnSet.push(key);
          headerTr$.append($('<th/>').html(key));
        }
      }
    }
    $(selector).append(headerTr$);
  
    return columnSet;
  }
   
  }
  
  function createTable()
  {
    rn = 8;
    cn = 8;
    
   for(var r=0;r<parseInt(rn,10);r++)
    {
     var x=document.getElementById('myTable').insertRow(r);
     for(var c=0;c<parseInt(cn,10);c++)  
      {
       var y=  x.insertCell(c);
       y.innerHTML="Row-"+r+" Column-"+c; 
      }
     }
  }
  
  
  // Builds the HTML Table out of myList.
  function buildHtmlTable(selector, myList) {
    var columns = addAllColumnHeaders(myList, selector);
  
    for (var i = 0; i < myList.length; i++) {
      var row$ = $('<tr/>');
      for (var colIndex = 0; colIndex < columns.length; colIndex++) {
        var cellValue = myList[i][columns[colIndex]];
        if (cellValue == null) cellValue = "";
        row$.append($('<td/>').html(cellValue));
      }
      $(selector).append(row$);
    }
  }
  
  // Adds a header row to the table and returns the set of columns.
  // Need to do union of keys from all records as some records may not contain
  // all records.
  function addAllColumnHeaders(myList, selector) {
    var columnSet = [];
    var headerTr$ = $('<tr/>');
  
    for (var i = 0; i < myList.length; i++) {
      var rowHash = myList[i];
      for (var key in rowHash) {
        if ($.inArray(key, columnSet) == -1) {
          columnSet.push(key);
          headerTr$.append($('<th/>').html(key));
        }
      }
    }
    $(selector).append(headerTr$);
  
    return columnSet;
  }
  
  
  function filter(opt){
  
    var opt1  = document.getElementById(opt).value;
  
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
  });
       $.ajax({
          type:'POST',
          url:'/filter',
          data:{opt1:opt1},
          success:function(data){
  
           var myList = JSON.parse(data);
  
           if(myList.length == 0){
            alert("Data Not Found");
          }
          else{
           var selector = "#excelDataTable";
           buildHtmlTable(selector, myList)
          }
          }
       });
  
  }
  
  $(document).ready(function(){
    $("button").click(function(){
      $(".t1").empty();
    });
  });