# Philwinkle_StaticBlockGridLinks
Adds a "view" link to Magento static block grid in Adminhtml


##The problem

Admin grid rows in Magento have their click target set via Javascript. This is a Bad Thing™ because control/command-click events are largely ignored, meaning it is impossible to open line-items in a new tab.

Other admin grids in Magento provide an "Edit" or "View" link in a column (e.g. Sales Order) that works around this problem as the click target is the <a> tag and not the Javascript outer link. 

##The solution

This module adds the view link to the right-most column in your static block grid view. This allows you to control/command-click to open multiples in new tabs without navigating away from the current static block grid view.

<img src="http://i.imgur.com/rNYL8kN.png"/>
