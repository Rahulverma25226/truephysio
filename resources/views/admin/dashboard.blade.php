@include('admin.header')
        <div class="outer">
          <div class="inner bg-container">
            <div class="row">
              <div class="col-xl-12 col-lg-7 col-12">
                <div class="row">
                  <div class="col-sm-3 col-12">
                    <div class="bg-primary top_cards">
                      <div class="row icon_margin_left">
                        <div class="col-lg-5 col-5 icon_padd_left">
                          <div class="float-left">
                            <span class="fa-stack fa-sm">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-shopping-cart fa-stack-1x fa-inverse text-primary sales_hover"></i>
                            </span>
                          </div>
                        </div>
                        <div class="col-lg-7 col-7 icon_padd_right">
                          <div class="float-right cards_content">
                            <span class="number_val" id="sales_count"></span><i class="fa fa-long-arrow-up fa-2x"></i>
                            <br />
                            <span class="card_description">Sales</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 col-12">
                    <div class="bg-success top_cards">
                      <div class="row icon_margin_left">
                        <div class="col-lg-5  col-5 icon_padd_left">
                          <div class="float-left">
                            <span class="fa-stack fa-sm">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-eye fa-stack-1x fa-inverse text-success visit_icon"></i>
                            </span>
                          </div>
                        </div>
                        <div class="col-lg-7 col-7 icon_padd_right">
                          <div class="float-right cards_content">
                            <span class="number_val" id="visitors_count"></span><i class="fa fa-long-arrow-up fa-2x"></i>
                            <br />
                            <span class="card_description">Visitors</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 col-12">
                    <div class="bg-warning top_cards">
                      <div class="row icon_margin_left">
                        <div class="col-lg-5 col-5 icon_padd_left">
                          <div class="float-left">
                            <span class="fa-stack fa-sm">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-usd fa-stack-1x fa-inverse text-warning revenue_icon"></i>
                            </span>
                          </div>
                        </div>
                        <div class="col-lg-7 col-7 icon_padd_right">
                          <div class="float-right cards_content">
                            <span class="number_val" id="revenue_count"></span><i class="fa fa-long-arrow-up fa-2x"></i>
                            <br />
                            <span class="card_description">Revenue</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 col-12">
                    <div class="bg-mint top_cards">
                      <div class="row icon_margin_left">
                        <div class="col-lg-5 col-5 icon_padd_left">
                          <div class="float-left">
                            <span class="fa-stack fa-sm">
                              <i class="fa fa-circle fa-stack-2x"></i>
                              <i class="fa fa-users  fa-stack-1x fa-inverse text-mint sub"></i>
                            </span>
                          </div>
                        </div>
                        <div class="col-lg-7 col-7 icon_padd_right">
                          <div class="float-right cards_content">
                            <span class="number_val" id="subscribers_count"></span><i class="fa fa-long-arrow-down fa-2x"></i>
                            <br />
                            <span class="card_description">Subscribers</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>

    @include ('admin.footer')
