<?php

/*
 *               _ _
 *         /\   | | |
 *        /  \  | | |_ __ _ _   _
 *       / /\ \ | | __/ _` | | | |
 *      / ____ \| | || (_| | |_| |
 *     /_/    \_|_|\__\__,_|\__, |
 *                           __/ |
 *                          |___/
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author TuranicTeam
 * @link https://github.com/TuranicTeam/Altay
 *
 */

declare(strict_types=1);

namespace pocketmine\event\entity;

use pocketmine\entity\Entity;
use pocketmine\event\Cancellable;
use pocketmine\item\Item;

/**
 * Called before a slot in an entity's inventory changes.
 */
class EntityInventoryChangeEvent extends EntityEvent implements Cancellable{
	/** @var Item */
	private $oldItem;
	/** @var Item */
	private $newItem;
	/** @var int */
	private $slot;

	public function __construct(Entity $entity, Item $oldItem, Item $newItem, int $slot){
		$this->entity = $entity;
		$this->oldItem = $oldItem;
		$this->newItem = $newItem;
		$this->slot = $slot;
	}

	/**
	 * Returns the inventory slot number affected by the event.
	 * @return int
	 */
	public function getSlot() : int{
		return $this->slot;
	}

	/**
	 * Returns the item which will be in the slot after the event.
	 * @return Item
	 */
	public function getNewItem() : Item{
		return $this->newItem;
	}

	/**
	 * @param Item $item
	 */
	public function setNewItem(Item $item) : void{
		$this->newItem = $item;
	}

	/**
	 * Returns the item currently in the slot.
	 * @return Item
	 */
	public function getOldItem() : Item{
		return $this->oldItem;
	}


}