@auth
@php
                  $id_user = Auth::user()->id;
                  $check_trial = \App\Models\Workspace\SubscribeTransactions::where('id_user', '=', $id_user)->first();
                  
                  @endphp
                  @if($check_trial)
                    @if($check_trial->expired_at < \Carbon\Carbon::now())
                    <div class="promotion-box">
                        <h5>
                        Premium Benefits
                        </h5>
                        <p>
                        Unlock thousands UI Design to boost Flutter project with no limits.
                        </p>
                        <p class="mt-4">
                        <a href="https://api.whatsapp.com/send?phone=6285156562504&text=Hello!+I+want+to+upgrade+my+account+to+Premium+Access." class="btn btn-primary">
                            Upgrade to Premium
                        </a>
                        </p>
                    </div>
    @endif
  @else
  @endif
  @endauth
  @guest
  @endguest