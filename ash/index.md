---
layout: default
title: WritersBlog
permalink: /ash/
position: 4
---
<ul class="post-list">
{% for post in site.posts %}
{% if post.categories contains 'writing' %}
<li>
    <p class="post-list-date">
        <span class="post-meta post-list-date-day">{{ post.date | date: "%-d %b" }}</span>
        <span class="post-meta post-list-date-year">{{ post.date | date: "%Y" }}</span>
    </p>
    <h2>
        <a class="post-link" href="{{ post.url | prepend: site.baseurl }}">{{ post.title }}</a>
    </h2>
</li>
{% endif %}
{% endfor %}
</ul>