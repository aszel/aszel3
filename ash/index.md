---
layout: default
title: aszel.com ash blog
permalink: /ash/
position: 4
---

<h1 class="post-title">ASH Crew</h1>

<p>Posts vom alten Blog</p>

<ul class="post-list">
{% for post in site.posts %}
{% if post.categories contains 'writing' %}
<a class="post-link" href="{{ post.url | prepend: site.baseurl }}">
    <li>
        <p class="post-list-date">
            <span class="post-meta post-list-date-day">{{ post.date | date: "%-d %b" }}</span>
            <span class="post-meta post-list-date-year">{{ post.date | date: "%Y" }}</span>
        </p>
        <h2>
            {{ post.title }}
            <p class="post-meta">{% if post.meta %}{{ post.meta }}{% endif %}</p>
        </h2>
    </li>
</a>
{% endif %}
{% endfor %}
</ul>