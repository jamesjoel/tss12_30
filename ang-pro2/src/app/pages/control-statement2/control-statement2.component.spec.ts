import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ControlStatement2Component } from './control-statement2.component';

describe('ControlStatement2Component', () => {
  let component: ControlStatement2Component;
  let fixture: ComponentFixture<ControlStatement2Component>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ControlStatement2Component ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ControlStatement2Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
