<div class="container-fluid mt--20 p-0 header pl-4 pr-4"
     style="height: 50px; background: linear-gradient(87deg, #2dce89 0, #2dcecc 100%">
     <div class="row">
          <div class="col">

               <div class="row">
                    <div class="col-xl-4 col-md-6">
                         <div class="card">
                              <!-- Card body -->
                              <div class="card-body p-2">
                                   <div class="row">
                                        <div class="col">
                                             <h5 class="card-title text-uppercase text-muted mb-0">Total Omzet</h5>
                                             <span class="h2 font-weight-bold mb-0 text-dark" style="font-size:20px">Rp
                                                  6.613.000</span>
                                        </div>
                                        <div class="col-auto">
                                             <div class="icon icon-shape bg-gradient-primary text-white rounded-circle shadow"
                                                  style="background: linear-gradient(45deg, #ff00ff, #00ffff);">
                                                  <i class="p-3 fas fa-chart-bar"></i>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                         <div class="card">
                              <!-- Card body -->
                              <div class="card-body p-2">
                                   <div class="row">
                                        <div class="col">
                                             <h5 class="card-title text-uppercase text-muted mb-0">Total Omzet Perdana
                                             </h5>
                                             <span class="h2 font-weight-bold mb-0 text-dark" style="font-size:20px">Rp
                                                  6.224.000</span>
                                        </div>
                                        <div class="col-auto">
                                             <div
                                                  class="icon icon-shape bg-gradient-warning text-white rounded-circle shadow">
                                                  <i class="p-3 fas fa-user-plus"></i>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                         <div class="card">
                              <!-- Card body -->
                              <div class="card-body p-2">
                                   <div class="row">
                                        <div class="col">
                                             <h5 class="card-title text-uppercase text-muted mb-0">Total Omzet Order
                                             </h5>
                                             <span class="h2 font-weight-bold mb-0 text-dark" style="font-size:20px">Rp
                                                  389.000</span>
                                        </div>
                                        <div class="col-auto">
                                             <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow"
                                                  style="background: linear-gradient(45deg, aqua, blue);">
                                                  <i class="p-3 fas fa-chart-bar"></i>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>


               <div class="accordion mt-5" id="accordionOmzetMonthly">
                    <div class="card mb-3">
                         <div class="card-header" id="headOmzetMonthly" data-toggle="collapse"
                              data-target="#collapseOmzetMonthly" aria-expanded="false"
                              aria-controls="collapseOmzetMonthly">
                              <h4 class="mb-0 text-dark">Omset Bulan</h4>
                         </div>
                         <div id="collapseOmzetMonthly" class="collapse show" aria-labelledby="headOmzetMonthly"
                              data-parent="#accordionOmzetMonthly">
                              <div class="table-container">
                                   <table class="table align-items-center table-flush" id="list_table_omzet_monthly">
                                        <thead class="thead-primary"
                                             style="background: linear-gradient(87deg, #2dce89 0%, #2dcecc 100%) !important;">
                                             <tr role="row" class="heading">
                                                  <th scope="col" rowspan="2" style="width: 10px;color:white;">#</th>
                                                  <th scope="col" rowspan="2" class="text-center text-light">Bulan</th>
                                                  <th scope="col" colspan="2" class="text-center text-light">Omset</th>
                                                  <th scope="col" rowspan="2" class="text-center text-light">Total Omset
                                                  </th>
                                                  <th scope="col" rowspan="2" class="text-center text-light">Total Bonus
                                                  </th>
                                                  <th scope="col" rowspan="2" class="text-center text-light">Persentase
                                                  </th>
                                                  <th scope="col" rowspan="2" class="text-center text-light">Proses</th>
                                             </tr>
                                             <tr role="row" class="heading">
                                                  <th scope="col" class="text-center text-light">Perdana (Amount)</th>
                                                  <th scope="col" class="text-center text-light">Order (Amount)</th>
                                             </tr>
                                        </thead>
                                        <tbody class="list">
                                             <!-- Data Will Be Placed Here -->
                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>

               <div class="accordion" id="accordionOmzetDaily">
                    <div class="card mb-3">
                         <div class="card-header collapsed" id="headOmzetDaily" data-toggle="collapse"
                              data-target="#collapseOmzetDaily" aria-expanded="true" aria-controls="collapseOmzetDaily">
                              <h4 class="mb-0 text-dark">Omset Harian</h4>
                         </div>
                         <div id="collapseOmzetDaily" class="collapse" aria-labelledby="headOmzetDaily"
                              data-parent="#accordionOmzetDaily">
                              <div class="table-container">
                                   <table class="table align-items-center table-flush" id="list_table_omzet_daily"
                                        style="overflow-x:scroll">
                                        <thead class="thead-primary"
                                             style="background: linear-gradient(87deg, #2dce89 0%, #2dcecc 100%) !important;">
                                             <tr role="row" class="heading">
                                                  <th scope="col" rowspan="2" style="width: 10px;color:white;">#</th>
                                                  <th scope="col" rowspan="2" class="text-center text-white">Tanggal
                                                  </th>
                                                  <th scope="col" colspan="2" class="text-center text-white">Omset</th>
                                                  <th scope="col" rowspan="2" class="text-center text-white">Total Omset
                                                  </th>
                                                  <th scope="col" rowspan="2" class="text-center text-white">Total Bonus
                                                  </th>
                                                  <th scope="col" rowspan="2" class="text-center text-white">Proses</th>
                                             </tr>
                                             <tr role="row" class="heading text-white">
                                                  <th scope="col" class="text-center text-white">Perdana (Amount)</th>
                                                  <th scope="col" class="text-center text-white">RO (Amount)</th>
                                             </tr>
                                        </thead>
                                        <tbody class="list">
                                             <!-- Data Will Be Placed Here -->
                                        </tbody>
                                   </table>
                              </div>
                         </div>
                    </div>
               </div>