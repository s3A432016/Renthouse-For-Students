{{Session::reflash()}}

@include('common.errorsettings')
@include('common.head')

<link rel="stylesheet" type="text/css" href="/layui/css/layui.css">
<link rel="stylesheet" type="text/css" href="/css/one.css">
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="/layer/layer.js" type="text/javascript" charset="utf-8" async defer></script>

@include('common.rapidsearch')

<main class="app--core">

    @include('common.navigation')


    <section class="rslt">
        <nav class="rslt__view">
            <div class="rslt__view__acts">
                <form>
                    <button class="btn__fl state--active" js-view-grid><i class="btn__seg ion ion-grid"></i></button>
                    <button class="btn__fl" js-view-rows><i class="btn__seg ion ion-navicon"></i></button>
                    <button class="btn__fl" js-view-map><i class="btn__seg ion ion-ios-location"></i></button>

                    <label class="ui-dd">
                        <select name="result-sort" id="">
                            <option value="relevant">價格↑</option>
                            <option value="relevant">價格↓</option>
                        </select>
                        <i class="ion ion-ios-arrow-down"></i>
                    </label>
                </form>

            </div>
        </nav>

        <ul class="rslt__feed">
                    <li class="feed__itm" js-result-item><!--item 1 -->
                        <div class="feed__itm__inr">
                            <div class="feed__itm__img" style="background-image: url('{{  $house->file1 }}')" >
                                <span class="feed__itm__prc">$ 5000 元/月</span>
                                <button class="btn__fl btn--fav" js-item-fav>
                                    <i class="btn__seg ion ion-android-favorite-outline"></i>
                                    <i class="btn__seg ion ion-android-favorite"></i>
                                </button>
                            </div>
                            <h5 class="feed__itm__ttl">房屋名稱</h5>
                            <p class="feed__itm__lbl lbl--1">by owner&nbsp;-&nbsp;
                                <span>
                                    {{ '#'.房屋類型.' '}}
                                    {{ '#'.租金.' '}}
                                    {{ '#'.租期.' '}}
                                    {{ '#'.生活機能.' '}}
                                </span>
                            </p>
                            <button class="layui-btn layui-btn-radius layui-btn-normal" style="float: right;" type="button" >查看房屋</button>
                        </div>
                    </li><!--@end feed item-->
        </ul>

        @include('common.footer')

        <script src="/js/one.js" type="text/javascript" charset="utf-8" async defer></script>

