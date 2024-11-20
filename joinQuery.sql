select *
from cart
join cart_food
	on cart.cart_id = cart_food.cart_id
join fooditems
	on cart_food.f_id = fooditems.f_id
where cart.c_id = 4;
