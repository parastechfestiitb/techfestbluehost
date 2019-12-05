<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $k = /** @lang json */
            <<<text
{
  "short_description": "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
  "description": {
    "task":"<p>Bear claw danish pastry macaroon. Chocolate cake sugar plum sesame snaps sweet roll powder candy halvah. Sugar plum sweet wafer cheesecake bonbon liquorice danish pudding pie. Cake croissant chupa chups dessert candy. Lemon drops lemon drops chocolate cake marshmallow tart chocolate brownie. Lemon drops cotton candy cake bear claw gingerbread. Cake sugar plum danish cookie apple pie croissant cotton candy toffee. Chocolate bar tiramisu tiramisu. Cotton candy pie croissant chocolate. Sugar plum cupcake ice cream caramels danish cake. Chocolate bar candy canes carrot cake chupa chups caramels. Caramels carrot cake cotton candy. Dragée tiramisu chocolate lemon drops sugar plum chupa chups icing sugar plum. Bonbon sesame snaps sesame snaps gingerbread fruitcake danish jelly beans tootsie roll.</p><p>Topping pastry ice cream. Chocolate cake candy lemon drops jelly beans oat cake oat cake cheesecake toffee marzipan. Sesame snaps chocolate bar danish cake apple pie tiramisu caramels cake. Fruitcake topping pastry sweet roll cake sweet fruitcake muffin caramels. Candy canes tart tart. Lollipop sweet roll tootsie roll lemon drops sugar plum. Dragée powder croissant cupcake croissant croissant bonbon icing liquorice. Carrot cake pudding dragée lemon drops soufflé cotton candy candy canes carrot cake pudding. Wafer cupcake soufflé liquorice lemon drops chocolate donut tootsie roll. Tart chocolate liquorice bear claw dragée. Ice cream icing lollipop tart sweet cupcake icing. Carrot cake caramels macaroon. Sugar plum caramels gummi bears caramels cake pudding cake carrot cake.</p><p>Carrot cake lemon drops sugar plum muffin. Gingerbread tiramisu dessert bear claw. Cake candy oat cake tootsie roll. Halvah soufflé apple pie cookie jelly-o cheesecake jelly-o gummi bears. Lollipop topping danish dessert tiramisu tiramisu candy canes. Toffee biscuit cupcake gummi bears muffin. Chocolate cake cake lollipop gingerbread marzipan pudding. Sugar plum jelly-o sweet roll chocolate cake jelly beans fruitcake chocolate bar. Cheesecake cookie pastry tart sweet roll caramels candy canes sweet candy. Topping candy cake carrot cake carrot cake chocolate cake oat cake gummies. Ice cream sugar plum chupa chups tiramisu croissant gummies liquorice. Muffin sugar plum bear claw croissant. Cheesecake jelly chocolate pie.</p><p>Cheesecake cookie bear claw. Carrot cake chocolate candy canes topping marzipan. Jelly beans topping pudding pudding chocolate cake dessert tart. Dessert oat cake sesame snaps caramels jujubes pie cake lemon drops. Cake brownie tootsie roll sweet roll tootsie roll muffin. Sweet biscuit jelly beans sugar plum toffee lemon drops. Dessert gingerbread cupcake. Candy lemon drops cake muffin tiramisu cake. Gingerbread chocolate cake bonbon jelly-o cookie gummies. Liquorice tart candy canes jelly chocolate. Sweet bear claw sweet cake powder. Pie tiramisu caramels.</p><p>Soufflé powder gingerbread cupcake pudding caramels chocolate sweet. Marzipan jelly-o dragée fruitcake dragée. Powder tootsie roll liquorice biscuit sesame snaps cake biscuit oat cake. Sweet jelly cake tart gummi bears fruitcake oat cake sweet. Chocolate macaroon chupa chups. Tootsie roll cake pudding chocolate gummi bears caramels. Cotton candy icing tootsie roll pastry tiramisu. Cotton candy gummies cookie. Jujubes gummies cheesecake tart bear claw brownie macaroon chocolate bar cheesecake. Dessert macaroon chocolate bar muffin toffee dessert sesame snaps gummies. Oat cake marzipan jelly-o. Jujubes gummies cotton candy jelly bonbon icing. Marshmallow cake lollipop ice cream icing jelly-o.</p>",
    
    "about":"<p>Croissant brownie tart tart toffee. Cupcake marshmallow topping sesame snaps macaroon jujubes wafer chocolate cake gingerbread. Lemon drops bonbon bear claw marzipan cake apple pie candy. Jelly beans cake jelly-o. Ice cream halvah marzipan soufflé chocolate bear claw bear claw ice cream ice cream. Soufflé donut gummi bears sugar plum marzipan. Dragée donut croissant. Chupa chups brownie danish carrot cake halvah wafer pudding tiramisu. Macaroon sugar plum lemon drops caramels candy canes bear claw. Toffee gummi bears macaroon brownie croissant jelly cake.</p><p>Sweet roll jelly beans candy canes cheesecake topping cheesecake. Sugar plum soufflé fruitcake donut soufflé marshmallow macaroon pie cheesecake. Cookie chocolate sweet roll pudding gummies dragée. Cookie candy canes dessert chupa chups tiramisu jelly. Toffee cotton candy sweet tootsie roll. Tart gummies cookie chupa chups jelly brownie marshmallow icing halvah.</p><p>Bear claw gingerbread sweet roll. Halvah tiramisu cake. Sugar plum liquorice candy canes pastry danish. Cheesecake biscuit chocolate bar. Danish soufflé dragée donut. Candy brownie marzipan. Sesame snaps croissant gummies soufflé powder pastry chocolate bar. Croissant fruitcake muffin jelly-o cheesecake pastry sugar plum pie. Cake pie sweet roll carrot cake.</p><p>Gingerbread cake wafer marzipan carrot cake apple pie. Toffee chocolate cake donut jujubes dessert chupa chups chocolate bar. Biscuit jelly-o jelly lemon drops cake pudding ice cream jelly brownie. Jelly jujubes caramels soufflé sesame snaps ice cream jelly cake. Ice cream danish soufflé powder bear claw brownie oat cake. Lollipop chocolate jelly beans jujubes. Biscuit brownie cookie pie.</p><p>Cheesecake lollipop toffee cupcake gummies. Soufflé chupa chups soufflé toffee biscuit cheesecake. Oat cake jelly-o gummies cake. Apple pie sugar plum cake jelly beans sesame snaps icing marzipan. Muffin pastry caramels toffee fruitcake cake carrot cake bonbon apple pie. Sweet roll ice cream biscuit. Sweet roll ice cream biscuit powder bear claw brownie danish. Gummi bears oat cake biscuit jelly-o candy pie chocolate cake soufflé. Gummies chocolate bar muffin dragée tiramisu dessert jelly liquorice muffin. Tootsie roll carrot cake caramels carrot cake powder sweet roll liquorice biscuit.</p>"
  },
  "problem_statements": [
    {
      "url": "https://techfest.org",
      "name": "Zonals Problem Statement"
    },
    {
      "url": "https://techfest.org",
      "name": "Main Problem Statement"
    }
  ]
}
text;
        Event::insert([
            'name'=>str_random(10),
            'registration'=>\Carbon\Carbon::today(),
            'payment'=>\Carbon\Carbon::today(),
            'amount'=>2000,
            'category'=>'Competition',
            'participants'=>4,
            'description'=> $k
        ]);
    }
}
