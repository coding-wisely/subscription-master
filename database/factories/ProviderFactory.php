<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Provider>
 */
class ProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['Netflix', 'Amazon Prime', 'Disney+', 'Hulu', 'HBO Max', 'Apple TV', 'Peacock', 'Paramount+', 'Discovery+', 'ESPN+', 'Starz', 'Showtime', 'Sling TV', 'Fubo TV', 'Philo', 'YouTube TV', 'AT&T TV', 'Vudu', 'Crackle', 'Pluto TV', 'Tubi', 'IMDb TV', 'Roku Channel', 'Xumo', 'Plex', 'Kanopy', 'Hoopla', 'HBO Now', 'CBS All Access', 'NBC', 'ABC', 'FOX', 'CW', 'PBS', 'BBC', 'ITV', 'Channel 4', 'Channel 5', 'Sky', 'Virgin Media', 'BT', 'TalkTalk', 'NOW TV', 'Freeview', 'Freesat', 'YouView', 'Apple TV+', 'Disney+ Hotstar', 'Zee5', 'SonyLIV', 'Voot', 'ALTBalaji', 'Eros Now', 'MX Player', 'JioCinema', 'Hungama Play', 'Hoichoi', 'Airtel Xstream', 'Vodafone Play', 'Sun NXT', 'Tata Sky', 'Dish TV', 'Videocon D2H', 'Sling TV', 'Hulu', 'Fubo TV', 'Philo', 'YouTube TV', 'AT&T TV', 'Spectrum TV', 'Verizon Fios', 'Xfinity', 'Cox', 'Optimum', 'Suddenlink', 'Mediacom', 'WOW!', 'RCN', 'Frontier', 'Google Fiber', 'CenturyLink', 'Windstream', 'Kinetic', 'Consolidated Communications', 'TDS', 'Grande Communications', 'Wave Broadband', 'Cable ONE', 'Sparklight', 'Atlantic Broadband', 'RCN', 'MetroNet', 'EPB', 'Greenlight Networks', 'Google Fiber', 'Webpass', 'Sonic', 'Monkeybrains',]),
            'user_id' => \App\Models\User::factory(),
            'subscription_fee' => $this->faker->randomFloat(2, 1, 100),
            'subscription_period' => $this->faker->randomElement(['monthly', 'annually']),
            'description' => $this->faker->sentence,
            'subscription_type' => $this->faker->randomElement(['basic', 'standard', 'premium']),
            'status' => $this->faker->randomElement([2,1,0,3,4]),
        ];
    }
}
