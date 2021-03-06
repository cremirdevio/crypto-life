  <div class="sidebar">
      <div class="menu">
          <ul>
              <li>
                  <a href="{{ route('home') }}" data-toggle="tooltip" data-placement="right" title="Dashboard">
                      <span><i class="mdi mdi-view-dashboard"></i></span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('withdrawals.create') }}" data-toggle="tooltip" data-placement="right" title="Withdraw Funds">
                      <span><i class="mdi mdi-bank"></i></span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('deposits.create') }}" data-toggle="tooltip" data-placement="right" title="Deposit Funds">
                      <span><i class="mdi mdi-cash-usd"></i></span>
                  </a>
              </li>
              <li>
                  <a href="{{ route('account-settings') }}" data-toggle="tooltip" data-placement="right" title="Setting">
                      <span><i class="mdi mdi-account"></i></span>
                  </a>
              </li>

            @hasrole('admin')
              <li>
                <a href="{{ route('admin.dashboard') }}" data-toggle="tooltip" data-placement="right" title="Admin Dashboard">
                    <span><i class="mdi mdi-account-multiple"></i></span>
                </a>
            </li>
            @endhasrole
          </ul>
      </div>
  </div>
