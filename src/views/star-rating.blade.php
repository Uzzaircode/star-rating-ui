<select class="{{config('star-rating-ui.selector','star')}}">
    @for($i = 1; $i <= config('star-rating-ui.star-count',5);$i++)
     <option value="{{$i}}">{{$i}}</option>
    @endfor
</select>
