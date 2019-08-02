<!-- Cart view section -->
<section id="cart-view">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart-view-area">
                    <div class="cart-view-table">
                        <form action="">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Email</th>
                                        <th>Created at</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach($users as $user)
                                    <tr>
                                        <td><a class="remove" href="/user-delete/{{$user->id}}"><fa class="fa fa-close"></fa></a></td>
                                        <td><a class="remove" href="#"><fa class="fa fa-edit"></fa></a></td>
                                        <td><a class="aa-cart-title" href="#">{{$user->name}}</a></td>
                                        <td>
                                            <li class="dropdown"><a href="/">All<span class="caret"></span></a>
                                                <ul  class="dropdown-content" style="text-align: center; min-width: 80px; min-height: 50px;">
                                                    <li><a href="/role-update-admin/{{$user->id}}">Admin</a></li>
                                                    <li><a href="/role-update-User/{{$user->id}}">User</a></li>
                                                </ul>
                                            </li>
                                        </td>
                                        <td><a class="aa-cart-title" href="#">{{$user->email}}</a></td>
                                        <td><a class="aa-cart-title" href="#">{{$user->created_at}}</a></td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td colspan="6" class="aa-cart-view-bottom">
                                            {{--<div class="aa-cart-coupon">--}}
                                                {{--<input class="aa-coupon-code" type="text" placeholder="Coupon">--}}
                                                {{--<input class="aa-cart-view-btn" type="submit" value="Apply Coupon">--}}
                                            {{--</div>--}}
                                            {{--<input class="aa-cart-view-btn" type="submit" value="Update Cart">--}}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <!-- Cart Total view -->
                        {{--<div class="cart-view-total">--}}
                            {{--<h4>Cart Totals</h4>--}}
                            {{--<table class="aa-totals-table">--}}
                                {{--<tbody>--}}
                                {{--<tr>--}}
                                    {{--<th>Subtotal</th>--}}
                                    {{--<td>$450</td>--}}
                                {{--</tr>--}}
                                {{--<tr>--}}
                                    {{--<th>Total</th>--}}
                                    {{--<td>$450</td>--}}
                                {{--</tr>--}}
                                {{--</tbody>--}}
                            {{--</table>--}}
                            {{--<a href="#" class="aa-cart-view-btn">Proced to Checkout</a>--}}
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Cart view section -->
