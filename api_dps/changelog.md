# v0.3.7
* Weapons with equal min-damage and max-damage are now fixed (Ray Katana, etc.)
Also, are there any TypeScript/React devs in the community willing to become a maintainer? I'm a bit busy from studying for university entrance exams so updates may be a bit spotty.

# v0.3.6
* Burst weapon APS is now affected by Berzerk to reflect MotMG 2022 changes. Again however, "Burst support is kind of implemented, but it's probably wrong since I have virtually no info about it".

# v0.3.5
* Added support for ***most*** Summon abilities

# v0.3.4
* Added support for Mystic status abilities
* Made styling for dropdown for selecting between Production and Testing better for Chrome users.

# v0.3.3
* Added dropdown for selecting between Production and Testing.
* Corrected supported classes for equipment tooltips.
* Fixed bug with empty input on equipment accuracy textbox becoming NaN

# v0.3.2
* Added settings menu for changing simulation parameters
* Fixed not being able to unequip items

Side note, if you want to see how the new weapon subtypes match up to the current ones, you can find them [here](https://rotmg-mirror.github.io/rotmg-dps-calculator/?config=testing.json).

# v0.3.1
* Fixed status effects applying inconsistently.
* Added support for scepters
* Turned ability DPS off by default.

Something to note with this update is status effects are applied properly when using abilities now, even if you don't have the status effect ticked for the set. This means if you have ability DPS enabled, you'll get berserk from helmets, damaging from seals, etc. 


# v0.3.0
* Added support for the following items:
	* Divinity
	* Oryx's Escutcheon
	* Exalted God's Horn
	* Vesture of Duality
	* Collector's Monocle
	* Genesis Spell
	* Chaotic Scripture
	* The Twilight Gemstone
	* Robe of the Mad Scientist
	* Primal Arcana
	* Elemental Equilibrium
	* Sporous Spray Spell
	* Embellished Quiver
	* Soulcursed Scythe
* Fixed armor-piercing shots not accounting for attack
* Support for bleeding
* Turned down simulation time. This results in slightly less accurate numbers, but should run faster for people with slow browsers.

# v0.2.3
* Added custom tooltip for graph points that shows how much each DPS source contributes
* Fixed accuracy input display
* Added accuracy to abilities 

# v0.2.2
* Added "% of shots hit" modifier to weapons

# v0.2.1
* Equipment from the sandbox is automatically imported
* Fixed proc chances and required status effects for procs not being considered

# v0.2.0 
* ST support
* Ability DPS support for Traps and Shurikens

# v0.1.1
* Fixed tooltips not switching sides when reaching the edge of the screen
* Color picker style changes & usability
* Pet magic heal field is now capped properly
* Rate of Fire is now included in DPS calculations

# v0.1.0

Initial release!

Major changes from the previous version
* DPS is now simulated behind the scene instead of just using a formula. This means a few things:
	* Some procs (like stat boosts) are supported, with more coming in the future.
	* The downside of this approach is that DPS values aren't calculated for every single DEF value, and is spread out now by default.
	* Ability DPS is supported partially aswell! You can tell if an ability is being included by looking for a star in the ability tooltip. Each star means that specific part of the ability is supported.
* No scrolling section on the side. You now have to click on the individual set on the right-hand side to edit that set.
	* This may be changed in the future to make it more seamless, since it can feel clunky trying to change equipment for a bunch of sets.

A few things aren't implemented at the moment:
* Custom weapons. They'll most likely be implemented using the sandbox, but it's low priority at the moment.
* Enemies aren't shown at the various DEF values.
* Burst support is kind of implemented, but it's probably wrong since I have virtually no info about it.