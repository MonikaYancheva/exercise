export interface Item {
  id: string;
  item: string;
  checked: boolean;
}

export default class ListItem implements Item {
  // the modifiers before constructor's params (private, public and protected) tell TS to automatically generate the commented lines (id)

  //private _id: string

  constructor(private _id: string = '', private _item: string = '', private _checked: boolean = false) {
    // this._id = _id;
  }

  get id(): string {
    return this._id;
  }

  set id(id: string) {
    this._id = id;
  }

  get item(): string {
    return this._item;
  }

  set item(item: string) {
    this._item = item;
  }

  get checked(): boolean {
    return this._checked;
  }

  set checked(checked: boolean) {
    this._checked = checked;
  }
}
