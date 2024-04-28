@extends('layouts.template')
@section('content')
<div class="page-header">
  <h1 class="page-title font_lato">Pricing Tables </h1>
  <div class="page-header-actions">
	<ol class="breadcrumb">
		<li><a href="{{URL::to('/dashboard')}}">{{ trans('app.home')}}</a></li>
		<li class="active">Pricing Tables</li>
	</ol>
  </div>
</div> 
 <div class="page-content">
      <!-- Panel -->
      <div class="panel">
        <div class="panel-body container-fluid">
          <!-- Example Pricing List -->
          <div class="example-wrap">
            <h4 class="example-title">Pricing-List - Bg In Title</h4>
            <div class="example">
              <div class="row">
                <div class="col-sm-6 col-lg-3">
                  <div class="pricing-list">
                    <div class="pricing-header">
                      <div class="pricing-title">Standard</div>
                      <div class="pricing-price">
                        <span class="pricing-currency">$</span>
                        <span class="pricing-amount">40</span>
                        <span class="pricing-period">/ mo</span>
                      </div>
                    </div>
                    <ul class="pricing-features">
                      <li>
                        <strong>10GB</strong> of Lorem ipsum</li>
                      <li>
                        <strong>200MB</strong> Max File Size</li>
                      <li>
                        <strong>2GHZ</strong> CPU</li>
                      <li>
                        <strong>256MB</strong> Memory</li>
                    </ul>
                    <div class="pricing-footer">
                      <a class="btn btn-primary btn-outline" role="button"><i class="icon wb-arrow-right font-size-16 margin-right-15" aria-hidden="true"></i>Add to card</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="pricing-list">
                    <div class="pricing-header">
                      <div class="pricing-title bg-blue-600">Premium</div>
                      <div class="pricing-price">
                        <span class="pricing-currency blue-600">$</span>
                        <span class="pricing-amount blue-600">50</span>
                        <span class="pricing-period">/ mo</span>
                      </div>
                    </div>
                    <ul class="pricing-features">
                      <li>
                        <strong>10GB</strong> of Lorem ipsum</li>
                      <li>
                        <strong>200MB</strong> Max File Size</li>
                      <li>
                        <strong>2GHZ</strong> CPU</li>
                      <li>
                        <strong>256MB</strong> Memory</li>
                    </ul>
                    <div class="pricing-footer">
                      <a class="btn btn-primary btn-outline" role="button"><i class="icon wb-arrow-right font-size-16 margin-right-15" aria-hidden="true"></i>Add to card</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="pricing-list">
                    <div class="pricing-header">
                      <div class="pricing-title">Professional</div>
                      <div class="pricing-price">
                        <span class="pricing-currency">$</span>
                        <span class="pricing-amount">60</span>
                        <span class="pricing-period">/ mo</span>
                      </div>
                    </div>
                    <ul class="pricing-features">
                      <li>
                        <strong>10GB</strong> of Lorem ipsum</li>
                      <li>
                        <strong>200MB</strong> Max File Size</li>
                      <li>
                        <strong>2GHZ</strong> CPU</li>
                      <li>
                        <strong>256MB</strong> Memory</li>
                    </ul>
                    <div class="pricing-footer">
                      <a class="btn btn-primary btn-outline" role="button"><i class="icon wb-arrow-right font-size-16 margin-right-15" aria-hidden="true"></i>Add to card</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                  <div class="pricing-list">
                    <div class="pricing-header">
                      <div class="pricing-title">Flagship</div>
                      <div class="pricing-price">
                        <span class="pricing-currency">$</span>
                        <span class="pricing-amount">70</span>
                        <span class="pricing-period">/ mo</span>
                      </div>
                    </div>
                    <ul class="pricing-features">
                      <li>
                        <strong>10GB</strong> of Lorem ipsum</li>
                      <li>
                        <strong>200MB</strong> Max File Size</li>
                      <li>
                        <strong>2GHZ</strong> CPU</li>
                      <li>
                        <strong>256MB</strong> Memory</li>
                    </ul>
                    <div class="pricing-footer">
                      <a class="btn btn-primary btn-outline" role="button"><i class="icon wb-arrow-right font-size-16 margin-right-15" aria-hidden="true"></i>Add to card</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Example Pricing List -->
          <!-- Example Pricing List2 -->
          <div class="example-wrap">
            <h4 class="example-title">Pricing-List - Bg In Head</h4>
            <div class="example">
              <div class="row">
                <div class="col-sm-6 col-xlg-3">
                  <div class="pricing-list text-left">
                    <div class="pricing-header bg-blue-grey-600">
                      <div class="pricing-title">Standard</div>
                      <div class="pricing-price">
                        <span class="pricing-currency">$</span>
                        <span class="pricing-amount">40</span>
                        <span class="pricing-period">/ mo</span>
                      </div>
                      <p class="padding-horizontal-30 padding-bottom-25">Vestibulum lacinia arcu eget nulla. Class aptent taciti</p>
                    </div>
                    <ul class="pricing-features">
                      <li>
                        <strong>10GB</strong> of Lorem ipsum</li>
                      <li>
                        <strong>200MB</strong> Max File Size</li>
                      <li>
                        <strong>2GHZ</strong> CPU</li>
                      <li>
                        <strong>256MB</strong> Memory</li>
                      <li>
                        <strong>1 GB</strong> Storage</li>
                      <li>
                        <strong>*</strong> Sed dignissim lacinia nunc. Curabitur tortor.
                        Pellentesque nibh.</li>
                    </ul>
                    <div class="pricing-footer text-center bg-blue-grey-100">
                      <a class="btn btn-primary btn-lg"><i class="icon wb-arrow-right font-size-16 margin-right-15" aria-hidden="true"></i> Add to card</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xlg-3">
                  <div class="pricing-list text-left">
                    <div class="pricing-header bg-blue-600">
                      <div class="pricing-title">Premium</div>
                      <div class="pricing-price">
                        <span class="pricing-currency">$</span>
                        <span class="pricing-amount">50</span>
                        <span class="pricing-period">/ mo</span>
                      </div>
                      <p class="padding-horizontal-30 padding-bottom-25">Vestibulum lacinia arcu eget nulla. Class aptent taciti</p>
                    </div>
                    <ul class="pricing-features">
                      <li>
                        <strong>10GB</strong> of Lorem ipsum</li>
                      <li>
                        <strong>200MB</strong> Max File Size</li>
                      <li>
                        <strong>2GHZ</strong> CPU</li>
                      <li>
                        <strong>256MB</strong> Memory</li>
                      <li>
                        <strong>2 GB</strong> Storage</li>
                      <li>
                        <strong>*</strong> Sed dignissim lacinia nunc. Curabitur tortor.
                        Pellentesque nibh.</li>
                    </ul>
                    <div class="pricing-footer text-center bg-blue-grey-100">
                      <a class="btn btn-primary btn-lg"><i class="icon wb-arrow-right font-size-16 margin-right-15" aria-hidden="true"></i> Add to card</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xlg-3">
                  <div class="pricing-list text-left">
                    <div class="pricing-header bg-red-600">
                      <div class="pricing-title">Professional</div>
                      <div class="pricing-price">
                        <span class="pricing-currency">$</span>
                        <span class="pricing-amount">60</span>
                        <span class="pricing-period">/ mo</span>
                      </div>
                      <p class="padding-horizontal-30 padding-bottom-25">Vestibulum lacinia arcu eget nulla. Class aptent taciti</p>
                    </div>
                    <ul class="pricing-features">
                      <li>
                        <strong>10GB</strong> of Lorem ipsum</li>
                      <li>
                        <strong>200MB</strong> Max File Size</li>
                      <li>
                        <strong>2GHZ</strong> CPU</li>
                      <li>
                        <strong>256MB</strong> Memory</li>
                      <li>
                        <strong>4 GB</strong> Storage</li>
                      <li>
                        <strong>*</strong> Sed dignissim lacinia nunc. Curabitur tortor.
                        Pellentesque nibh.</li>
                    </ul>
                    <div class="pricing-footer text-center bg-blue-grey-100">
                      <a class="btn btn-primary btn-lg"><i class="icon wb-arrow-right font-size-16 margin-right-15" aria-hidden="true"></i> Add to card</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-xlg-3">
                  <div class="pricing-list text-left">
                    <div class="pricing-header bg-orange-600">
                      <div class="pricing-title">Flagship</div>
                      <div class="pricing-price">
                        <span class="pricing-currency">$</span>
                        <span class="pricing-amount">70</span>
                        <span class="pricing-period">/ mo</span>
                      </div>
                      <p class="padding-horizontal-30 padding-bottom-25">Vestibulum lacinia arcu eget nulla. Class aptent taciti</p>
                    </div>
                    <ul class="pricing-features">
                      <li>
                        <strong>10GB</strong> of Lorem ipsum</li>
                      <li>
                        <strong>200MB</strong> Max File Size</li>
                      <li>
                        <strong>2GHZ</strong> CPU</li>
                      <li>
                        <strong>256MB</strong> Memory</li>
                      <li>
                        <strong>8 GB</strong> Storage</li>
                      <li>
                        <strong>*</strong> Sed dignissim lacinia nunc. Curabitur tortor.
                        Pellentesque nibh.</li>
                    </ul>
                    <div class="pricing-footer text-center bg-blue-grey-100">
                      <a class="btn btn-primary btn-lg"><i class="icon wb-arrow-right font-size-16 margin-right-15" aria-hidden="true"></i> Add to card</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Example Pricing List2 -->
          <!-- Example Pricing Table -->
          <div class="example-example">
            <h4 class="example-title">Pricing Table</h4>
            <div class="example">
              <div class="pricing-table">
                <div class="pricing-column-four">
                  <div class="pricing-header">
                    <div class="pricing-price">
                      <span class="pricing-currency">$</span>
                      <span class="pricing-amount">40</span>
                      <span class="pricing-period">/ mo</span>
                    </div>
                    <div class="pricing-title">Standard</div>
                  </div>
                  <ul class="pricing-features">
                    <li>
                      <strong>10GB</strong> of Lorem ipsum</li>
                    <li>
                      <strong>200MB</strong> Max File Size</li>
                    <li>
                      <strong>2GHZ</strong> CPU</li>
                    <li>
                      <strong>256MB</strong> Memory</li>
                    <li>
                      <strong>1 GB</strong> Storage</li>
                  </ul>
                  <div class="pricing-footer">
                    <a class="btn btn-primary btn-outline" role="button"><i class="icon wb-arrow-right font-size-16 margin-right-15" aria-hidden="true"></i>Add to card</a>
                  </div>
                </div>
                <div class="pricing-column-four featured">
                  <div class="pricing-header">
                    <div class="pricing-price">
                      <span class="pricing-currency">$</span>
                      <span class="pricing-amount">50</span>
                      <span class="pricing-period">/ mo</span>
                    </div>
                    <div class="pricing-title">Premium</div>
                  </div>
                  <ul class="pricing-features">
                    <li>
                      <strong>10GB</strong> of Lorem ipsum</li>
                    <li>
                      <strong>200MB</strong> Max File Size</li>
                    <li>
                      <strong>2GHZ</strong> CPU</li>
                    <li>
                      <strong>256MB</strong> Memory</li>
                    <li>
                      <strong>2 GB</strong> Storage</li>
                  </ul>
                  <div class="pricing-footer">
                    <a class="btn btn-primary btn-outline" role="button"><i class="icon wb-arrow-right font-size-16 margin-right-15" aria-hidden="true"></i>Add to card</a>
                  </div>
                </div>
                <div class="pricing-column-four">
                  <div class="pricing-header">
                    <div class="pricing-price">
                      <span class="pricing-currency">$</span>
                      <span class="pricing-amount">60</span>
                      <span class="pricing-period">/ mo</span>
                    </div>
                    <div class="pricing-title">Professional</div>
                  </div>
                  <ul class="pricing-features">
                    <li>
                      <strong>10GB</strong> of Lorem ipsum</li>
                    <li>
                      <strong>200MB</strong> Max File Size</li>
                    <li>
                      <strong>2GHZ</strong> CPU</li>
                    <li>
                      <strong>256MB</strong> Memory</li>
                    <li>
                      <strong>4 GB</strong> Storage</li>
                  </ul>
                  <div class="pricing-footer">
                    <a class="btn btn-primary btn-outline" role="button"><i class="icon wb-arrow-right font-size-16 margin-right-15" aria-hidden="true"></i>Add to card</a>
                  </div>
                </div>
                <div class="pricing-column-four">
                  <div class="pricing-header">
                    <div class="pricing-price">
                      <span class="pricing-currency">$</span>
                      <span class="pricing-amount">70</span>
                      <span class="pricing-period">/ mo</span>
                    </div>
                    <div class="pricing-title">Flagship</div>
                  </div>
                  <ul class="pricing-features">
                    <li>
                      <strong>10GB</strong> of Lorem ipsum</li>
                    <li>
                      <strong>200MB</strong> Max File Size</li>
                    <li>
                      <strong>2GHZ</strong> CPU</li>
                    <li>
                      <strong>256MB</strong> Memory</li>
                    <li>
                      <strong>8 GB</strong> Storage</li>
                  </ul>
                  <div class="pricing-footer">
                    <a class="btn btn-primary btn-outline" role="button"><i class="icon wb-arrow-right font-size-16 margin-right-15" aria-hidden="true"></i>Add to card</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Example Pricing Table -->
        </div>
      </div>
      <!-- End Panel -->
    </div>
<br/>

@stop