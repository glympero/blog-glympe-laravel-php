<div class="top-bar">
  <div class="top-bar-left">
    <ul class="menu">
      <li class="menu-text">Admin</li>
      <li {{ Request::is('admin') ? 'class=active' : '' }} ><a href="{{ route('admin.index') }}">Dashboard</a></li>
      <li {{ Request::is('admin/blog/post*') ? 'class=active' : '' }} ><a href="{{ route('admin.blog.index') }}">Posts</a></li>
      <li {{ Request::is('admin/blog/category*') || Request::is('admin/blog/categories*') ? 'class=active' : '' }} ><a href="{{ route('admin.blog.categories') }}">Categories</a></li>
      <li {{ Request::is('admin/contact') ? 'class=active' : '' }} ><a href="{{ route('blog.index') }}">Messages</a></li>
      <li><a href="{{ route('about') }}">Logout</a></li>
      
      
    </ul>
  </div>
</div>
<div class="callout large primary">
        <div class="row column text-center">
            <h1>Admin Area</h1>
            <h2 class="subheader">Blog Management</h2>
        </div>
    </div>