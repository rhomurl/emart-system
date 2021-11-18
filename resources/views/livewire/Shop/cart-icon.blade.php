<div class="widget-header">
    <a href="{{ route('cart') }}" class="widget-view">
        <div class="icon-area">
            <i class="fa fa-shopping-cart">
                <span class="notify">
                    @if ($cartAmount < 9)
                        {{ $cartAmount }}
                    @else
                        9+
                    @endif
                </span>
            </i>
        </div>
        <small class="text"> Cart </small>
    </a>
</div>

