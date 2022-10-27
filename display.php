<!DOCTYPE html>
<html>

  <head>
    <link rel="icon" href="./images/brand.ico">
    <link rel="stylesheet" href="./css/ext.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title> Fetch Data From Database </title>
  </head>

  <body>


    <nav class="bg-none border-gray-200 px-2 sm:px-4 py-2.5 rounded dark:bg-black">
      <div class="container flex flex-wrap justify-between items-center mx-auto">
        <a href="./index.html" class="flex items-center">
          <img src="./Images/brand.png" class="mr-3 h-6 sm:h-9" alt="Brand logo">
          <span class="self-center text-3xl font-bold whitespace-nowrap dark:text-white ">COUNT STOCK</span>
        </a>

        <div class="hidden w-full md:block md:w-auto" id="navbar-default">

          <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-transparent  dark:border-gray-700">



            <li>
              <a href="./index.html" class="block py-2 pr-4 pl-3 text-xl text-white bg-blue-700 rounded md:bg-transparent md:text-gray-100 md:p-0 dark:text-white" aria-current="page">Home</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<!-- /*
    <table align="center" border="1px" style="width:600px; line-height:40px;">
      <tr>
        <th colspan="5">
          <h2>Appliance Details</h2>
        </th>
      </tr>
      <th> Appliance Name </th>
      <th> DOP </th>
      <th> Details </th>
      <th> Brand </th>
      <th> Category </th>

      </tr>

      <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "test1";
        
        
        $conn = mysqli_connect($servername, $username, $password, $database);
        
        $sql= "SELECT * FROM appliancedetails ";
        $result = mysqli_query($conn, $sql);

        $rows = mysqli_num_rows($result);
        //echo $rows;
//echo "Number of rows found in database<br>";

    if($rows>0)
    {

        while($tuple=mysqli_fetch_assoc($result)) 
		{ 
            
		?>
      <tr>
        <td>
          <?php echo $tuple['ApplianceName']; ?>
        </td>
        <td>
          <?php echo $tuple['DOP']; ?>
        </td>
        <td>
          <?php echo $tuple['Details']; ?>
        </td>
        <td>
          <?php echo $tuple['Brand']; ?>
        </td>
        <td>
          <?php echo $tuple['Category']; ?>
        </td>
      </tr>
      <?php 
        }
    } 
    ?>

    </table>
*/ -->

    <!-- component -->
	<section class=" text-gray-800 text-center">
<h2 class="text-3xl font-bold  pt-4 mx-auto ">APPLIANCE REPORT</h2>
</section>
    <div class="bg-white  rounded-md w-1/2 m-auto">
      <div class=" flex items-center justify-between pb-6">
        <div>

        </div>
        <div class="flex items-center justify-between">
          <div class="flex bg-gray-50 items-center p-2 rounded-md">

          </div>

        </div>
      </div>
      <div>
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
          <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
            <table class="min-w-full leading-normal">
              <thead>
                <tr>
                  <th class="border-r px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    <b>Appliance name</b>
                  </th>
                  <th class=" border-r px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    <b>DOP</b>
                  </th>
                  <th class=" border-r px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    <b>Details</b>
                  </th>
                  <th class=" border-r px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    <b>Brand</b>
                  </th>
                  <th class=" border-r px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                    <b>Category</b>
                  </th>
                </tr>
              </thead>
              <tbody>

                <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "test1";
        
        
        $conn = mysqli_connect($servername, $username, $password, $database);
        
        $sql= "SELECT * FROM appliancedetails ";
        $result = mysqli_query($conn, $sql);

        $rows = mysqli_num_rows($result);
        //echo $rows;
//echo "Number of rows found in database<br>";

    if($rows>0)
    {

        while($tuple=mysqli_fetch_assoc($result)) 
		{ 
            
		?>
                <tr>

                  <div class="flex items-center">
                    <p>
					<td class="pl-3 border-b border-r">
                        <?php echo $tuple['ApplianceName']; ?>
                      </td>
                    </p>
                    </td>


                    
                    <td class="pl-3 border-b border-r pt-4">
                      <?php echo $tuple['DOP']; ?>
                    </td>
                    </p>


                    

                    
					<td class="pl-3 border-b border-r">
                      <?php echo $tuple['Details']; ?>
                    </td>

            
					<td class="pl-3 border-b border-r">
                      <?php echo $tuple['Brand']; ?>
                    </td>

                 
               
					<td class="pl-3 border-b border-r">
                      <?php echo $tuple['Category']; ?>
                    </td>

                    </p>
                    </td>

                </tr>

                <?php 
        }
    } 
    ?>




                <footer class="text-center bg-black-200 text-white   fixed inset-x-0 bottom-0">



                  <div class="text-center pb-3 pt-3" style="background-color:black;">
                    © 2022 Copyright:
                    <a class="text-white" href="https://tailwind-elements.com/">Count Stock </a>
                  </div>

                </footer>
  </body>

</html>


