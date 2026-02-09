<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'headline' => 'Mason Grandusky | Web Design and Development',
            'introduction' => 'With over 20 years of experience as a web developer and security engineer, I specialize in creating robust, secure, and scalable web solutions.',
            
            'skills' => [
                [
                    'category' => 'Web Design & Development',
                    'items' => ['PHP', 'HTML/HTML5', 'CSS/CSS3', 'WordPress', 'Drupal', 'jQuery', 'Python', 'JSP', 'C++']
                ],
                [
                    'category' => 'Security Engineering',
                    'items' => ['Red Hat Enterprise Linux', 'Apache', 'Secure Architecture', 'Security Protocols']
                ]
            ],
            
            'highlights' => [
                'Experienced in managing and maintaining up to 96 websites',
                'Development of interactive catalogs and applications',
                'Expertise in responsive website and application development'
            ],
            
            'experience' => [
                ['company' => 'Registrar Corp', 'role' => 'Senior Technical Role'],
                ['company' => 'PARO', 'role' => 'Senior Technical Role'],
                ['company' => 'Rootwurks', 'role' => 'Senior Technical Role'],
                ['company' => 'Intertek Alchemy', 'role' => 'Senior Technical Role']
            ],
            
            'projects' => [
                [
                    'name' => 'BB Shines Car Wash',
                    'url' => 'https://www.bbshines.com',
                    'description' => 'Professional car wash website with online booking system'
                ],
                [
                    'name' => 'Paro',
                    'url' => 'https://www.paro.ai',
                    'description' => 'AI-powered financial services platform'
                ]
            ],
            
            'testimonials' => [
                [
                    'text' => 'Mason\'s problem-solving abilities and strong communication skills make him an invaluable team member.',
                    'author' => 'Client'
                ],
                [
                    'text' => 'His technical excellence and e-commerce expertise have consistently delivered high-quality results.',
                    'author' => 'Client'
                ],
                [
                    'text' => 'Zero downtime track record and exceptional reliability in all projects.',
                    'author' => 'Client'
                ]
            ],
            
            'approach' => [
                'Comprehensive needs assessment',
                'Development of scalable solutions',
                'Focus on business performance and reliability'
            ]
        ];
        
        return view('home', $data);
    }
}
