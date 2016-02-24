<?php

$config = array(
	        'products' => array(   
	                array(
	                     'field'   => 'title',
	                     'label'   => 'Title',
	                     'rules'   => 'required|trim|strip_tags'
	                ),   
	                array(
	                     'field'   => 'price',
	                     'label'   => 'Price',
	                     'rules'   => 'required|trim|strip_tags|numeric'
	                ),
	                array(
	                     'field'   => 'content',
	                     'label'   => 'Content',
	                     'rules'   => 'required|trim|strip_tags'
	                )
            ),
            'news'	=> array(
            		array(
	                     'field'   => 'title',
	                     'label'   => 'Title',
	                     'rules'   => 'required|trim|strip_tags'
	                ),   
	                array(
	                     'field'   => 'author',
	                     'label'   => 'Author',
	                     'rules'   => 'required|trim|strip_tags'
	                ),
	                array(
	                     'field'   => 'date',
	                     'label'   => 'Date',
	                     'rules'   => 'required|trim|strip_tags'
	                ),
	                array(
	                     'field'   => 'content',
	                     'label'   => 'Content',
	                     'rules'   => 'required|trim|strip_tags'
	                )

            ),
            'address'  => array(
            		array(
	                     'field'   => 'address',
	                     'label'   => 'Address',
	                     'rules'   => 'required|trim|strip_tags'
	                ),
	                array(
	                     'field'   => 'phone',
	                     'label'   => 'Phone',
	                     'rules'   => 'required|trim|strip_tags|numeric'
	                ),
	                array(
	                     'field'   => 'email',
	                     'label'   => 'Email',
	                     'rules'   => 'required|valid_email|trim|strip_tags|callback_valid_email'
	                )         

            ),
            'pages'	=> array(
            		array(
	                     'field'   => 'title',
	                     'label'   => 'Title',
	                     'rules'   => 'required|trim|strip_tags'
	                  ),
	                array(
	                     'field'   => 'content',
	                     'label'   => 'Content',
	                     'rules'   => 'required|trim|strip_tags'
	                )

            ),
            'users'	=> array(
            		array(
	                     'field'   => 'username',
	                     'label'   => 'Username',
	                     'rules'   => 'required|trim|strip_tags|min_length[2]'
	                  ),
	                array(
	                     'field'   => 'password',
	                     'label'   => 'Password',
	                     'rules'   => 'required|trim|strip_tags|min_length[4]'
	                )

            ),
            'comments'	=> array(
            		array(
	                     'field'   => 'name',
	                     'label'   => 'Name',
	                     'rules'   => 'required|trim|strip_tags|min_length[2]'
	                  ),
	                array(
	                     'field'   => 'content',
	                     'label'   => 'Content',
	                     'rules'   => 'required|trim|strip_tags|min_length[4]'
	                )

            ),
            'contacts'  => array(
            		array(
	                     'field'   => 'name',
	                     'label'   => 'Name',
	                     'rules'   => 'required|trim|strip_tags|min_length[2]'
	                  ),
	                array(
	                     'field'   => 'phone',
	                     'label'   => 'Phone',
	                     'rules'   => 'required|trim|strip_tags|numeric'
	                ),
	                array(
	                     'field'   => 'email',
	                     'label'   => 'Email',
	                     'rules'   => 'required|valid_email|trim|strip_tags|callback_valid_email'
	                ),
	                array(
	                     'field'   => 'content',
	                     'label'   => 'Content',
	                     'rules'   => 'required|trim|strip_tags|min_length[4]'
	                )         

            ),
            'register'  => array(
            		array(
	                     'field'   => 'username',
	                     'label'   => 'Username',
	                     'rules'   => 'required|is_unique[costumers.username]|trim|strip_tags|min_length[2]'
	                ),
	                array(
	                     'field'   => 'password',
	                     'label'   => 'Password',
	                     'rules'   => 'required|matches[passconf]|trim|strip_tags|min_length[4]'
	                ),
	                array(
	                     'field'   => 'passconf',
	                     'label'   => 'Passconf',
	                     'rules'   => 'required|trim|strip_tags|min_length[4]'
	                ),
	                array(
	                     'field'   => 'name',
	                     'label'   => 'Name',
	                     'rules'   => 'required|trim|strip_tags|min_length[2]'
	                ),
            		array(
	                     'field'   => 'city',
	                     'label'   => 'City',
	                     'rules'   => 'required|trim|strip_tags|min_length[2]'
	                ),
	                array(
	                     'field'   => 'address',
	                     'label'   => 'Address',
	                     'rules'   => 'required|trim|strip_tags|min_length[2]'
	                ),     
	                array(
	                     'field'   => 'phone',
	                     'label'   => 'Phone',
	                     'rules'   => 'required|trim|strip_tags|numeric'
	                ),
	                array(
	                     'field'   => 'email',
	                     'label'   => 'Email',
	                     'rules'   => 'required|is_unique[costumers.email]|valid_email|trim|strip_tags|callback_valid_email'
	                )
	                   

            ),
			'categories'  => array(
            		
	                array(
	                     'field'   => 'cat_name',
	                     'label'   => 'Cat_name',
	                     'rules'   => 'required|trim|strip_tags|min_length[2]'
	                )
	                   
	        ),
            'order'  => array(
            		
	                array(
	                     'field'   => 'name',
	                     'label'   => 'Name',
	                     'rules'   => 'required|trim|strip_tags|min_length[2]'
	                ),
            		array(
	                     'field'   => 'city',
	                     'label'   => 'City',
	                     'rules'   => 'required|trim|strip_tags|min_length[2]'
	                ),
	                array(
	                     'field'   => 'address',
	                     'label'   => 'Address',
	                     'rules'   => 'required|trim|strip_tags|min_length[2]'
	                ),     
	                array(
	                     'field'   => 'phone',
	                     'label'   => 'Phone',
	                     'rules'   => 'required|trim|strip_tags|numeric'
	                ),
	                array(
	                     'field'   => 'email',
	                     'label'   => 'Email',
	                     'rules'   => 'required|valid_email|trim|strip_tags|callback_valid_email'
	                )
	                   

            )
            
        );