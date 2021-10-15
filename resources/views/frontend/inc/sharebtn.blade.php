<ul>
    <li>
        <div class="fb-share-button" data-href="{{url('article')}}/{{$data->slug}}" data-layout="button" data-size="large">
            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{URL::current()}}" class="fb-xfbml-parse-ignore">
                <i class="fab fa-facebook" style="font-size: 34px; color: #4267B2;"></i>
            </a>
        </div>
    </li>
    <li>
        <a class="twitter-share-button" href="https://twitter.com/share?url={{URL::current()}}">
        {{-- <a class="twitter-share-button" href="https://twitter.com/intent/tweet" data-size="large"> --}}
            <i class="fab fa-twitter" style="font-size: 34px; color: #1DA1F2;"></i>
        </a>
    </li>
    <li>
        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{URL::current()}}&title=Create LinkedIn Share button on Website Webpages&summary=chillyfacts.com&source=Chillyfacts" onclick="window.open(this.href, 'mywin', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;">
            <i class="fab fa-linkedin" style="font-size: 34px; color: #0072b1;"></i>
        </a>
    </li>
    <li>
        <a href="https://api.whatsapp.com/send/?phone&text={{URL::current()}}&app_absent=0">
            <i class="fab fa-whatsapp" style="font-size: 34px; color: #075E54;"></i>
        </a>
    </li>
    <li>
        <a href="mailto:?subject={{URL::current()}}&body={{URL::current()}}">
            <i class="fas fa-at" style="font-size: 34px;"></i>
        </a>
    </li>
</ul>
