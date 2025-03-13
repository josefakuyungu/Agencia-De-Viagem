<x-layout>
    <section class="section dashboard">
        <div class="row">
  
          <!-- Left side columns -->
          <div class="col-lg-12">
            <div class="row">
  
              <!-- Sales Card -->
              <div class="col-xxl-4 col-md-6">
               
                        <div class="card info-card sales-card">                           
        
                        <div class="filter">
                            
                                            </div>
        
                        <div class="card-body">
                            <h4 class="card-title ">Clientes</h4>
        
                            <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                <i class="bi bi-people"></i>
                            </div>
                            <div class="ps-3">
                                <h6>{{ $custumers ? $custumers : 0}}</h6>
        
                            </div>
                            </div>
                        </div>
                        </div>
              </div><!-- End Sales Card -->
  
              <!-- Revenue Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
  
  
                  <div class="card-body">
                    <h5 class="card-title">Funcionários</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-people-fill"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $officials ? $officials : 0}}</h6>
                    </div>     
                     
                    </div>
                  </div>
  
                </div>
              </div><!-- End Revenue Card -->
  


              <!-- Customers Card -->
              <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
  
                    
                  <div class="card-body">
                    <h5 class="card-title">Menu</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-card-list"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $menus ? $menus : 0}}</h6>
                        
  
                      </div>
                    </div>
  
                  </div>
                </div>
  

              </div><!-- End Customers Card -->


              <div class="col-xxl-4 col-md-6">
               
                <div class="card info-card sales-card">                           

                <div class="filter">
                    
                                    </div>

                <div class="card-body">
                    <h4 class="card-title ">Pedidos</h4>

                    <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-card-checklist"></i>
                    </div>
                    <div class="ps-3">
                        <h6>{{ $request ? $request : 0}}</h6>

                    </div>
                    </div>
                </div>
                </div>
      </div><!-- End Sales Card -->



   <!-- Revenue Card -->
              <div class="col-xxl-4 col-md-6">
                <div class="card info-card revenue-card">
  
  
                  <div class="card-body">
                    <h5 class="card-title">Itens</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-list-ol"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $order ? $order : 0}}</h6>
                    </div>
                     
                    </div>
                  </div>
  
                </div>
              </div><!-- End Revenue Card -->



              <div class="col-xxl-4 col-xl-12">
                <div class="card info-card customers-card">
  
                    
                  <div class="card-body">
                    <h5 class="card-title">Stock</h5>
  
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bi bi-wallet-fill"></i>
                      </div>
                      <div class="ps-3">
                        <h6>{{ $stock ? $stock : 0}}</h6>
                        
  
                      </div>
                    </div>
  
                  </div>
                </div>
  

              </div><!-- End Customers Card -->



            </div><!-- End Customers Card -->


            <div class="col-xxl-4 col-md-6">
             
              <div class="card info-card sales-card">                           

              <div class="filter">
                  
                                  </div>

              <div class="card-body">
                  <h4 class="card-title ">Supplies</h4>

                  <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                  </div>
                  <div class="ps-3">
                      <h6>{{ $suppliers ? $suppliers : 0}}</h6>

                  </div>
                  </div>
              </div>
              </div>
    </div><!-- End Sales Card -->



 <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">


                <div class="card-body">
                  <h5 class="card-title">Pagamentos</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-coin"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $payments ? $payments : 0}}</h6>
                  </div>
                   
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->



            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">

                  
                <div class="card-body">
                  <h5 class="card-title">Reservas</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-menu-button-wide-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{ $reserves ? $reservess : 0}}</h6>
                      

                    </div>
                  </div>

                </div>
              </div>


            </div><!-- End Customers Card -->



   <!-- Left side columns -->
   <div class="col-lg-12">
    <div class="row">

      <!-- Sales Card -->
      <div class="col-xxl-4 col-md-6">
       
                <div class="card info-card sales-card">                           

                <div class="filter">
                    
                                    </div>

                <div class="card-body">
                    <h4 class="card-title ">Mesas</h4>

                    <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="bx bxs-rectangle"></i>
                    </div>
                    <div class="ps-3">
                        <h6>{{ $tables ? $tables : 0}}</h6>

                    </div>
                    </div>
                </div>
                </div>
      </div><!-- End Sales Card -->




































  
              <!-- Reports -->
              <div class="col-12">
                <div class="card">
  
                  <div class="filter">
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                      <li class="dropdown-header text-start">
                        <h6>Filter</h6>
                      </li>
  
                      <li><a class="dropdown-item" href="#">Today</a></li>
                      <li><a class="dropdown-item" href="#">This Month</a></li>
                      <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                  </div>
  
                  <div class="card-body">
                    <h5 class="card-title">Reports <span>/Today</span></h5>
  
                    <!-- Line Chart -->
                    <div id="reportsChart"></div>
  
                    <script>
                      document.addEventListener("DOMContentLoaded", () => {
                        new ApexCharts(document.querySelector("#reportsChart"), {
                          series: [{
                            name: 'Sales',
                            data: [31, 40, 28, 51, 42, 82, 56],
                          }, {
                            name: 'Revenue',
                            data: [11, 32, 45, 32, 34, 52, 41]
                          }, {
                            name: 'Customers',
                            data: [15, 11, 32, 18, 9, 24, 11]
                          }],
                          chart: {
                            height: 350,
                            type: 'area',
                            toolbar: {
                              show: false
                            },
                          },
                          markers: {
                            size: 4
                          },
                          colors: ['#4154f1', '#2eca6a', '#ff771d'],
                          fill: {
                            type: "gradient",
                            gradient: {
                              shadeIntensity: 1,
                              opacityFrom: 0.3,
                              opacityTo: 0.4,
                              stops: [0, 90, 100]
                            }
                          },
                          dataLabels: {
                            enabled: false
                          },
                          stroke: {
                            curve: 'smooth',
                            width: 2
                          },
                          xaxis: {
                            type: 'datetime',
                            categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                          },
                          tooltip: {
                            x: {
                              format: 'dd/MM/yy HH:mm'
                            },
                          }
                        }).render();
                      });
                    </script>
                    <!-- End Line Chart -->
  
                  </div>
  
                </div>
              </div><!-- End Reports -->
  
  
  
            </div>
          </div><!-- End Left side columns -->
  
  
        </div>
      </section>
    
</x-layout>