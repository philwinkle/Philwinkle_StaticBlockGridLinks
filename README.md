# Philwinkle_StaticBlockGridLinks
Adds a "view" link to Magento static block grid in Adminhtml


##The problem

Admin grid rows in Magento have their click target set via Javascript. This is a Bad Thing™ because control/command-click events are largely ignored, meaning it is impossible to open line-items in a new tab.

Other admin grids in Magento provide an "Edit" or "View" link in a column (e.g. Sales Order) that works around this problem as the click target is the <a> tag and not the Javascript outer link. 

##The solution

This module adds the view link to the right-most column in your static block grid view. This allows you to control/command-click to open multiples in new tabs without navigating away from the current static block grid view.

![static block grid view](http://i.imgur.com/yGnrTQX.png)

##License

The MIT License (MIT)

Copyright (c) 2015 Phillip Jackson

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

