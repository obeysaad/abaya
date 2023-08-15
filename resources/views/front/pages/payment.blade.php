<form class="form" action="{{route('pay')}}" method="POST" />

    @csrf

    <input type="hidden" name="amount" value="200"/>

    <input type="submit" value="ok"/>
</form>
