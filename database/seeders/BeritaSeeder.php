<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('berita')->insert([
            [
                'title' => 'Tips for a Healthy Lifestyle',
                'content' => 'Maintaining a healthy lifestyle is essential for overall well-being. In this article, we provide some useful tips to help you lead a healthier life.',
                'thumbnail' => 'post1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Preventive Measures against Common Diseases',
                'content' => 'Learn about the preventive measures you can take to protect yourself from common diseases such as cold, flu, and allergies.',
                'thumbnail' => 'post2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Importance of Regular Exercise',
                'content' => 'Regular exercise has numerous benefits for physical and mental health. Discover why incorporating exercise into your daily routine is crucial.',
                'thumbnail' => 'post3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Nutrition Tips for a Balanced Diet',
                'content' => 'Eating a balanced diet is key to maintaining good health. Find out about essential nutrients and how to incorporate them into your meals.',
                'thumbnail' => 'post4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Managing Stress in Daily Life',
                'content' => 'Stress can have a significant impact on our well-being. Learn effective strategies to manage stress and improve your overall quality of life.',
                'thumbnail' => 'post5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Understanding Mental Health and Well-being',
                'content' => 'Mental health is as important as physical health. Gain insights into mental health issues and discover ways to promote well-being.',
                'thumbnail' => 'post6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Benefits of Adequate Sleep',
                'content' => 'Getting enough sleep is crucial for optimal health. Explore the benefits of quality sleep and learn tips for improving your sleep routine.',
                'thumbnail' => 'post7.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Maintaining a Healthy Heart',
                'content' => 'Heart health is vital for overall well-being. Find out how to keep your heart healthy through lifestyle choices and preventive measures.',
                'thumbnail' => 'post8.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Role of Vaccinations in Disease Prevention',
                'content' => 'Vaccinations play a crucial role in preventing the spread of diseases. Learn about the importance of vaccines and common misconceptions.',
                'thumbnail' => 'post9.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Healthy Habits for a Strong Immune System',
                'content' => 'A strong immune system is essential for fighting off infections. Discover habits that can boost your immune system and keep you healthy.',
                'thumbnail' => 'post10.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Maintaining Optimal Mental Health',
                'content' => 'Taking care of your mental health is crucial for overall well-being. Explore strategies to promote positive mental well-being.',
                'thumbnail' => 'post11.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Importance of Hydration for Health',
                'content' => 'Staying hydrated is vital for maintaining proper bodily functions. Learn about the benefits of hydration and how to stay hydrated.',
                'thumbnail' => 'post12.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
